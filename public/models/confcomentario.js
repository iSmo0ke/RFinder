import { initializeApp } from "firebase/app";
import { getFirestore, collection, addDoc } from "firebase/firestore";

// Configuración de Firebase
const firebaseConfig = {
    apiKey: "AIzaSyDtXJNaMuZNFqRYAlJsvX5-XVGivDLh8Ao",
    authDomain: "routefinder-409b5.firebaseapp.com",
    projectId: "routefinder-409b5",
    storageBucket: "routefinder-409b5.appspot.com",
    messagingSenderId: "1056432503789",
    appId: "1:1056432503789:web:970dc85e1b0642ca12c5e4",
    measurementId: "G-6W72CC0C8W"
};

// Inicializar Firebase
const app = initializeApp(firebaseConfig);

// Inicializar Firestore y obtener referencia
const db = getFirestore(app);

// Función para guardar comentario en Firestore
async function guardarComentario(name, email, comentario) {
  try {
    const docRef = await addDoc(collection(db, "Comentarios-web"), {
      name: name,
      email: email,
      comentario: comentario
    });
    console.log("Comentario guardado con ID: ", docRef.id);
    return true; // Opcional: puedes devolver true para indicar éxito
  } catch (e) {
    console.error("Error al guardar el comentario: ", e);
    return false; // Opcional: puedes devolver false para indicar error
  }
}

guardarComentario("Juan", "juan@example.com", "¡Este es un gran sitio web!");
