<a href="<?= $video['fileUrl'] ?>" class="image video no-lightbox">
	<?= $video['videoPlayButton'] ?>
	<img alt="<?= $video['fileTitle'] ?>" src="<?= $video['thumbUrl'] ?>" width="<?= $thumbWidth ?>" height="<?= $thumbHeight ?>" data-video-name="<?= htmlspecialchars($video['fileTitle']) ?>" data-video-key="<?= htmlspecialchars(urlencode($video['title'])) ?>" class="Wikia-video-thumb thumbimage">
	<?= $video['videoOverlay'] ?>
</a>
