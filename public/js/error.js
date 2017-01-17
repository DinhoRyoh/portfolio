var showText = function (target, message, index, interval) {
  if (index < message.length) {
    $(target).append(message[index++]);
    setTimeout(function () { showText(target, message, index, interval); }, interval);
  }
}
$(function () {
  showText("h1", "mais que fais tu ici ..? Tu me sembles perdu ! Petit rentres chez toi.", 0, 80);
});
