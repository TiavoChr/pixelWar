const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");
const colorPicker = document.getElementById("colorPicker");

const socket = new WebSocket("ws://localhost:8080");

socket.onmessage = (event) => {
    const data = JSON.parse(event.data);
    drawCell(data.coordonneX, data.coordonneY, data.color);
};

function changeColor(color) {
    socket.send(JSON.stringify({ color: color }));
}

function drawCell(coordonneX, coordonneY, color) {
    ctx.fillStyle = color;
    ctx.fillRect(coordonneX, coordonneY, 1, 1);
}

