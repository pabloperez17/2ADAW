window.onload = function(){
    let section = document.createElement("section");
    document.querySelector("body").appendChild(section);
    //article1
    let article1 = document.createElement("article");
    let texto_article1 = document.createTextNode ("PRIMER ARTICLE");
    article1.appendChild(texto_article1);
    section.appendChild(article1);

    let h2_1 = document.createElement("h2");
    let texto_h2_1 = document.createTextNode ("El pedo de un hipopótamo deja tres hospitalizados ")
    h2_1.appendChild(texto_h2_1)
    article1.appendChild(h2_1);

    let p1 = document.createElement("p")
    let texto_p1 = document.createTextNode("Cuando el grupo de viajeros estaba visitando las instalaciones del parque, muy cerca del recinto de los hipopótamos, uno de estos animales soltó un enorme pedo que provocó que varias personas cayeran al suelo, al parecer a causa de esos gases. Varias unidades del servicio de emergencias se desplazaron hasta el lugar de los hechos y trasladaron a tres de los visitantes, que no conseguían ser reanimados. Dos de ellos fueron dados de alta poco después, pero uno de los ancianos se encuentra aún ingresado en el Hospital Marqués de Valdecilla de Santander, donde evoluciona favorablemente.");
    p1.appendChild(texto_p1);
    article1.appendChild(p1);

    let img_1 = document.createElement("img");
    img_1.setAttribute("src", "./img/hipo.jpg");
    img_1.setAttribute("class", "imagen");
    article1.appendChild(img_1);

    //article2
    let article2 = document.createElement("article");
    let texto_article2 = document.createTextNode ("SEGUNDO ARTICLE");
    article2.appendChild(texto_article2);
    section.appendChild(article2);

    let h2_2 = document.createElement("h2");
    let texto_h2_2 = document.createTextNode ("Hacienda envía un borrador de la declaración de la Renta a un bebé ")
    h2_2.appendChild(texto_h2_2)
    article2.appendChild(h2_2);

    let p2 = document.createElement("p")
    let texto_p2 = document.createTextNode("Hace dos días llegó a su domicilio de Lleida lo que parecía una broma. Enseguida llamaron a Hacienda para pedir cita y saber si se trata o no de un error. «Es una anécdota, pero nos gustaría saber si ha sido un error o si tiene alguna explicación». Todo apunta a que no hay equivocación. Teo tiene a su nombre una cuenta bancaria, de ahí que le haya llegado este borrador. «Los bancos no distinguen entre menores de edad, ellos también producen intereses y por tanto se les genera un borrador », explica Daniel Vilariño, subinspector de Hacienda. «Si los padres quieren, pueden pedir que el próximo año a su hijo se le incluya en una declaración conjunta». «¡Menos mal que nos ha salido error burocrático que le daba por fallecido.");
    p2.appendChild(texto_p2);
    article2.appendChild(p2);

    let img_2 = document.createElement("img");
    img_2.setAttribute("src", "./img/bebe.png");
    img_2.setAttribute("class", "imagen");
    article2.appendChild(img_2);

}