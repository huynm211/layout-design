import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div class="wrapper">
        <div class="header mb"><p>.header</p></div>
        <div class="row">
            <div class="maincontent mb mr flex-center">.main-content</div>
            <div class="sidebar mb flex-center">.sidebar</div>
        </div>
        <div class="row">
            <div class="twin mb mr flex-center">.twin</div>
            <div class="twin mb flex-center">.twin</div>
        </div>
        <div class="footer"><p>.footer</p></div>
    </div>
  );
}

export default App;
