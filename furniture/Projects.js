const video = document.getElementById('hoverVideo');
    const container = document.getElementById('hoverVideoContainer');

    container.addEventListener('mouseenter', () => {
      video.play().catch(error => {
        console.error("Video kon niet starten:", error);
      });
    });

    container.addEventListener('mouseleave', () => {
      video.pause();
      video.currentTime = 0;
    });

    console.log("JavaScript is gekoppeld!");