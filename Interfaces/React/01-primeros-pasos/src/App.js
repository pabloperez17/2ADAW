import logo from './logo.svg';
import './App.css';
import { PrimerComponente } from './componentes/PrimerComponente.js';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <h1>Mi primer proyecto en React</h1>
      </header>
      <PrimerComponente/>
    </div>
  );
}

export default App;
