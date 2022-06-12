const canvas = document.getElementById('canvas')
const ctx = canvas.getContext('2d')
const nameInput = document.getElementById('name')
const downloadBtn = document.getElementById('download-btn')

const image = new Image()
image.src = 'assets/images/certificate.jpg'
image.onload = function () {
	drawImage()
}

function drawImage() {
	// ctx.clearRect(0, 0, canvas.width, canvas.height)
	ctx.drawImage(image, 0, 0, canvas.width, canvas.height)
	ctx.font = '20px monotype arial'
	ctx.fillStyle = '#00000'
	ctx.textAlign = "center"
	ctx.fillText(nameInput.value, 250, 180)
}

nameInput.addEventListener('input', function () {
	drawImage()
})

downloadBtn.addEventListener('click', function () {
	downloadBtn.href = canvas.toDataURL('image/png')
	downloadBtn.download = 'Certificate - ' + nameInput.value
})