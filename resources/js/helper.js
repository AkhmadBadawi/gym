function showImage(imageUrl) {
    document.getElementById('overlayImage').src = imageUrl;
    document.getElementById('imageOverlay').style.display = "block";
}

function closeImageOverlay() {
    document.getElementById('imageOverlay').style.display = "none";
}

function showPDF(url) {
    window.open(url, '_blank');
}