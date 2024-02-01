import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { Buscador } from "./componentes/Buscador.jsx";
import { Listado } from "./componentes/Listado.jsx";
import { Crear } from "./componentes/Crear.jsx";
import { Footer } from "./componentes/Footer.jsx";

function App() {
  const [count, setCount] = useState(0)

  return (
    <div className="layout">
        {/*Cabecera*/}
        <header className="header">
            <div className="logo">
                <div className="play"></div>
            </div>
            
            <h1>MisPelis</h1>
        </header>

        {/*Barra de navegación*/}
        <nav className="nav">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Peliculas</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>

        {/*Contenido principal*/}
        <section id="content" className="content">

            {/*aqui van las peliculas*/}
            <Listado></Listado>
            <Listado></Listado>
            <Listado></Listado>
            <Listado></Listado>
            
        </section>

        {/*Barra lateral*/}
        <aside className="lateral">
            <Buscador/>

            <Crear></Crear>
        </aside>

        {/*Pie de página*/}
        <Footer></Footer>
    </div>
  )
}

export default App
