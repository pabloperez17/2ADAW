import React from 'react'

export const PrimerComponente = () => {
    const nombre = "Pablo";
    const apellido = "Pérez";

    //console.log(nombre+" "+ apellido);

    let usuario = {
        nombre: "Pablo",
        apellido: "Pérez",
        profesion: "Estudiante"
    }

    return (
        <div className='mi-componente'>
            <hr/>
            <h2>Componente creado</h2>
            <p>Este es el primer componente de: {nombre +" "+ apellido}</p>
            <h3>Datos del usuario</h3>
            <ul>
                <li></li>
            </ul>
        </div>
  )
}

