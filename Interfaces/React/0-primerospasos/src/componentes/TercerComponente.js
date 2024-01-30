import React from 'react'

export const TercerComponente = () => {
    let año_actual = 2024;
    const año_siguiente = (e) => {
        año_siguiente = año_actual++;
    }
    const año_anterior = (e) => {
        año_anteior = año_actual--;
    }
    return (
        <div>
            <h3>Componente: useState</h3>
            <h3>Año_actual: {año_actual}</h3>
            <button onclick={año_siguiente}>Siguiente año</button>
            <button onclick={año_anterior}>Año anterior</button>
        </div>
    )
}