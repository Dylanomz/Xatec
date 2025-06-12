 document.querySelectorAll('.video-container').forEach(container => {
      const video = container.querySelector('video');
      container.addEventListener('mouseenter', () => video.play());
      container.addEventListener('mouseleave', () => video.pause());
    });

