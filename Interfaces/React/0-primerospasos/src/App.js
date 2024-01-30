import logo from './logo.svg';
import './App.css';
import { PrimerComponente } from './componentes/PrimerComponente';
import { AjaxComponent } from './componentes/AjaxComponent';

function App() {
  const ficha_deportiva = {
    altura: "170cm",
    peso: "72Kg",
    alergias: "Ninguna"
  }
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <h1>
          Mi primer proyecto en React
          <PrimerComponente nombre="PJ" apellidos="CR" ficha={ficha_deportiva}></PrimerComponente>
        </h1>

      </header>
      <SegundoComponente></SegundoComponente>
      <AjaxComponent></AjaxComponent>
    </div>
  );
}

export default App;
