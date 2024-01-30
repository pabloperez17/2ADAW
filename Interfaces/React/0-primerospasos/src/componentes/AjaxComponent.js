import React, { useEffect } from 'react'

export const AjaxComponent = () => {

    const [usuarios, setUsuario] = usestate([])

    const getUsuarioEstaticos = () => {
        setUsuarios([
            {
                "id": 1, "email": "george.bluth@reqres.in", "first_name": "George", "last_name": "Bluth", "avatar": "https://reqres.in/img/faces/1-image.jpg"
            },
            {
                "id": 2, "email": "janet.weaver@reqres.in", "first_name": "Janet", "last_name": "Weaver", "avatar": "https://reqres.in/img/faces/2-image.jpg"
            },
            {
                "id": 3, "email": "emma.wong@reqres.in", "first_name": "Emma", "last_name": "Wong", "avatar": "https://reqres.in/img/faces/3-image.jpg"
            },
            {
                "id": 4, "email": "eve.holt@reqres.in", "first_name": "Eve", "last_name": "Holt", "avatar": "https://reqres.in/img/faces/4-image.jpg"
            }

        ])
    }

    useEffect(() => {
        getUsuarioEstaticos();
    }, [usuarios]); // con [] le indico que se cargue unicamente cuando la carga inicial del componente

    return (
        <div>
            <h1>AjaxComponent</h1>
            <h2>Listado de usuarios</h2>
            { /*aqui iría nuestra peticion Ajax mediante: promesa o bien mediante async await*/}
            <ol classNmae='usuarios'>
                {
                    usuarios.map(usuario => {
                        console.log(suario);
                        return <li key={usuario.id}>{usuario.first_name} {usuario.last_name}<img src={usuario.avatar} width="50px"></img></li>

                    })
                }
            </ol>
        </div>
    )
}