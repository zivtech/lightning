<?php

/**
 * @file
 * Contains \Drupal\lightning_media\Controller\EmbedCodeController.
 */

namespace Drupal\lightning_media\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\media_entity\Entity\Media;
use Drupal\media_entity_embeddable_video\VideoProviderManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class EmbedCodeController extends EntityCrudController {

  /**
   * The video provider plugin manager.
   *
   * @var \Drupal\media_entity_embeddable_video\VideoProviderManager
   */
  protected $videoProviderManager;

  /**
   * EmbedCodeController constructor.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The currently logged-in user.
   * @param \Drupal\Core\Render\RendererInterface $renderer
   *   The renderer service.
   * @param \Drupal\media_entity_embeddable_video\VideoProviderManager $video_provider_manager
   *   The video provider plugin manager.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, AccountInterface $current_user, RendererInterface $renderer, VideoProviderManager $video_provider_manager) {
    parent::__construct($entity_type_manager, $current_user, $renderer);
    $this->videoProviderManager = $video_provider_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('current_user'),
      $container->get('renderer'),
      $container->get('plugin.manager.media_entity_embeddable_video.provider')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function post(Request $request) {
    $response = new JsonResponse();

    $data = json_decode($request->getContent(), TRUE);
    if (isset($data['embed_code'])) {
      $provider = $this->videoProviderManager->getProviderByEmbedCode($data['embed_code']);
      if ($provider) {
        $entity = Media::create([
          'bundle' => 'video',
          'name' => 'TODO',
          'uid' => $this->currentUser()->id(),
          'status' => TRUE,
          'thumbnail' => $provider->thumbnailURI(),
          'embed_code' => $data['embed_code'],
        ]);
        $entity->save();
        $data = $this->getEntityResponseData($entity);
        $build = $this->entityTypeManager()->getViewBuilder('media')->view($entity);
        $data['preview'] = $this->renderer->render($build);
        $response->setData($data);
      }
    }

    return $response;
  }

  /**
   * {@inheritdoc}
   */
  public function put(EntityInterface $media) {
    $media->field_media_in_library = TRUE;
    $media->save();
    $data = $this->getEntityResponseData($media);
    return new JsonResponse($data);
  }

  /**
   * {@inheritdoc}
   */
  public function delete(EntityInterface $media) {
    $media->delete();
    return new JsonResponse();
  }

  /**
   * {@inheritdoc}
   */
  protected function getEntityResponseData(EntityInterface $entity) {
    $data = parent::getEntityResponseData($entity);

    // Always render the thumbnail.
    $thumbnail = $entity->thumbnail->view();
    $thumbnail['#label_display'] = 'hidden';
    $data['thumbnail'] = $this->renderer->render($thumbnail);

    $preview = $this->entityTypeManager()
      ->getViewBuilder($entity->getEntityTypeId())
      ->view($entity);
    $data['preview'] = $this->renderer->render($preview);

    return $data;
  }

}
