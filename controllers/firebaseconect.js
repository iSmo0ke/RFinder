import { initializeApp } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
import { getFirestore, collection, addDoc } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-firestore.js";

// https://firebase.google.com/docs/web/setup#available-libraries
const firebaseConfig = {
    apiKey: "AIzaSyDRplYQcLl5p6G1fW4IBAwbWgYKMnri9eM",
    authDomain: "route-finder-75a0b.firebaseapp.com",
    projectId: "route-finder-75a0b",
    storageBucket: "route-finder-75a0b.appspot.com",
    messagingSenderId: "833216771763",
    appId: "1:833216771763:web:cbaec2a9392817195222c6",
    measurementId: "G-HMMHJH8PPC"
};

const app = initializeApp(firebaseConfig);
const firestore = getFirestore(app); // Obtén la instancia de Firestore

console.log("Conexión a Firebase establecida correctamente.");