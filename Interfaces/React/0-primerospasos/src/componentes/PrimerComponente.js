import React from 'react'
import PropTypes from 'prop-types'

export const PrimerComponente = (props) => {
  const nombre = "Pablo";
  const profesion = "Alumno";

//   console.log(nombre+" "+profesion);
    let usuario = {
        nombre: "Pablo",
        apellido: "Pérez",
        profesion: "Alumno"
    }

    const libros = ["Harry Potter", "Juego de Tronos", "Los Pilares de la Tierra"];

    console.log(props);

    return (
    <div className='mi-componente'>
        {/* Comentario */}
        <hr/>
        <h2>Componente creado</h2>
        <p>Estes es el primer proyecto react de {nombre}</p>
        <p>Profesion: {profesion}</p>
        <h3>Datos del usuario</h3>
        <ul>
            {/* <li><div>Nombre:{JSON.stringify(usuario.nombre)}</div></li>
            <li><div>Apellidos:{JSON.stringify(usuario.apellido)}</div></li>
            <li><div>Profesion:{JSON.stringify(usuario.profesion)}</div></li> */}

            <li><div>Nombre: {usuario.nombre}</div></li>
            <li><div>Apellidos: {usuario.apellido}</div></li>
            <li><div>Profesion: {usuario.profesion}</div></li>
        </ul>

        <h3>Listado Libros</h3>

        <ul>
            {
                libros.map((libro, indice) => {
                    return <li key = {indice}>{libro}</li>
                }) 

               
            }
        </ul>

        <h3>Pintamos PROPS</h3>
        <ul>
            <li>{ props.nombre }</li>
            <li>{ props.apellidos }</li>
            <li>{ props.ficha.altura }</li>
            <li>{ props.ficha.peso }</li>
            <li>{ props.ficha.alergias }</li>
        </ul>
    </div>
  )
}

PrimerComponente.propTypes = {
    nombre: PropTypes.string.isRequired,
    apellidos: PropTypes.string.isRequired,
    ficha: PropTypes.object
}

PrimerComponente.defaultProps = {
    nombre: "Pablo",
    apellidos: "Picapiedra"
}