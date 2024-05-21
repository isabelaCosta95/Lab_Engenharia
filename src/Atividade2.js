import React from 'react';
import {Link}  from "react-router-dom";
import Contador from './Contador';

export default function Atividade2() {
    return(
        <>
            <h1>Atividade 2- Contador</h1>
            <Contador />
            <br />
            <Link to="/">Retornar a página principal</Link>
        </>
        
    );
}
