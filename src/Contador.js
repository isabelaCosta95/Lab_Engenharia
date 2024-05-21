import React, { useState } from 'react';

function Contador() {
  const [totalMulheres, setTotalMulheres] = useState(0);
  const [totalHomens, setTotalHomens] = useState(0);

  const updateContadors = () => {
  };

  const handleIncrement = (isFemale) => {
    if (isFemale) {
      setTotalMulheres(totalMulheres + 1);
    } else {
      setTotalHomens(totalHomens + 1);
    }
    updateContadors();
  };

  const handleDecrement = (isFemale) => {
    if (isFemale && totalMulheres > 0) {
      setTotalMulheres(totalMulheres - 1);
    } else if (!isFemale && totalHomens > 0) {
      setTotalHomens(totalHomens - 1);
    }
    updateContadors();
  };

  return (
    <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center', height: '100vh' }}>
      <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', width: '100%', padding: '10px', boxSizing: 'border-box' }}>
        <h1 style={{ flexGrow: 1, textAlign: 'center', margin: 0 }}>TOTAL</h1>
        <div style={{ fontSize: '24px', height: '40px' }}>Total: {totalMulheres + totalHomens}</div>
        <img src="https://cdn.icon-icons.com/icons2/1094/PNG/512/reload1_78509.png" style={{ width: '50px', height: '50px', cursor: 'pointer' }} onClick={() => { setTotalMulheres(0); setTotalHomens(0); }} />
      </div>
      <div style={{ display: 'flex', justifyContent: 'space-around', alignItems: 'center', width: '100%' }}>
        <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center' }}>
          <h2>MULHER</h2>
          <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" style={{ width: '200px', height: '200px' }} />
          <div style={{ fontSize: '24px', height: '40px' }}>Mulheres: {totalMulheres}</div>
          <div style={{ display: 'flex' }}>
            <img src="https://cdn-icons-png.flaticon.com/512/148/148764.png" style={{ width: '50px', height: '50px', margin: '5px', cursor: 'pointer' }} onClick={() => handleIncrement(true)} />
            <img src="https://img.freepik.com/fotos-premium/aritmetica-branca-menos-sinal-na-forma-de-circulo-de-botao-vermelho-math-3d-icon-ilustracao-de-renderizacao-3d_733455-21.jpg" style={{ width: '50px', height: '50px', margin: '5px', cursor: 'pointer' }} onClick={() => handleDecrement(true)} />
          </div>
        </div>
        <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center' }}>
          <h2>HOMEM</h2>
          <img src="https://cdn-icons-png.flaticon.com/512/2552/2552801.png" style={{ width: '200px', height: '200px' }} />
          <div style={{ fontSize: '24px', height: '40px' }}>Homens: {totalHomens}</div>
          <div style={{ display: 'flex' }}>
            <img src="https://cdn-icons-png.flaticon.com/512/148/148764.png" style={{ width: '50px', height: '50px', margin: '5px', cursor: 'pointer' }} onClick={() => handleIncrement(false)} />
            <img src="https://img.freepik.com/fotos-premium/aritmetica-branca-menos-sinal-na-forma-de-circulo-de-botao-vermelho-math-3d-icon-ilustracao-de-renderizacao-3d_733455-21.jpg" style={{ width: '50px', height: '50px', margin: '5px', cursor: 'pointer' }} onClick={() => handleDecrement(false)} />
          </div>
        </div>
      </div>
    </div>
  );
}

export default Contador;