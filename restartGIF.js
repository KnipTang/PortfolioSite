
function restartGif() {
  const gif = document.getElementById("FlappyBird-gif");
  gif.src = gif.src; // Reloads the GIF by resetting the src attribute
}
setInterval(restartGif, 18000); // 15000 ms = 15 seconds