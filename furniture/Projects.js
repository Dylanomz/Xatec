
  const container = document.querySelector('.video-container');
  const video = container.querySelector('video');

  container.addEventListener('mouseenter', () => {
    video.play();
  });

  container.addEventListener('mouseleave', () => {
    video.pause();
    video.currentTime = 0; // Reset naar begin
  });
  




