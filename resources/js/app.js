import './bootstrap';

window.onload = () => {
	const delSofts = document.querySelectorAll('.delsoft')
	if(delSofts && delSofts.length > 0) {
		for(item of delSofts) {
			item.click = () => confirm("Daten wirklisch löschen?")
		}
	}
}
