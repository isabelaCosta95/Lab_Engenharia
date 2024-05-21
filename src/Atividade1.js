import React from 'react';
import Letreiro from './Letreiro';
import Relogio from './Relogio';
import {Link}  from "react-router-dom";


export default function Atividade1() {
    return(
        <>
            <h1>Atividade 1</h1>
            <Letreiro />
            <Relogio />
            <br />
            <Link to="/">Retornar a página principal</Link>
        </>
        
    );
}