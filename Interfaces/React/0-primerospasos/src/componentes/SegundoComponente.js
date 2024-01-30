import React from 'react'

export const SegundoComponente = () => {
    let nombre = "Pablo Pérez Iza";
    const cambiarNombre = (e) => {
        nombre = "Pérez Iza, Pablo"
    }
    return (
        <div>
            <h3>Componente: useState</h3>
            <h3>Nombre: {nombre}</h3>
            <button onclick={cambiarNombre}>Cambiar nombre</button>
        </div>
    )
}