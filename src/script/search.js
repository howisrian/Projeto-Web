// get filter element
const filter = document.querySelector('.forms input');
// get cards elements
const cards = document.querySelectorAll('.card');

if (filter) {
	// add input event for the filter element
	filter.addEventListener('input', filterCards);
}

// filter function
function filterCards() {
	// if the filter is not empty
	if (filter.value !== '') {
		// for each card of cards
		for (let card of cards) {
			// get card heading (title)
			let title = card.querySelector('h1');
			// transform to lowercase
			title = title.textContent.toLowerCase();
			// transform filter text to lowercase
			let filterText = filter.value.toLowerCase();
			// if card title does not include the filter text
			if (!title.includes(filterText)) {
				// hide the card element
				card.style.display = 'none';
			} else {
				// unhide the card element
				card.style.display = 'grid';
			}
		}
	} else {
		// for each card of cards
		for (let card of cards) {
			// unhide the card element
			card.style.display = 'block';
		}
	}
}
