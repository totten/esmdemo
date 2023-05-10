/**
 * Inject some markup at the top of the screen.
 *
 * @param markup string
 */
export default function importotron(markup) {
  const container = document.getElementById('crm-container');
  const newElement = document.createElement('div');
  newElement.innerHTML = markup;
  container.insertBefore(newElement, container.firstChild);
}
