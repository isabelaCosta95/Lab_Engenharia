import React from 'react';
import Gallery from './Gallery';
import { ProfileTWO } from './Gallery';
// import { ProfileLin } from './Gallery';
import { TodoList } from './Gallery';
import { TodoListTWO } from './Gallery';
import { Profile_avat2 } from './Gallery';
import { ProfileKat } from './Gallery';
import { PackingList } from './Gallery';
import { List } from './Gallery';
import { App } from './Gallery';
import { TeaSet } from './Gallery';
import {Link}  from "react-router-dom";


export default function Atividade3() {
    return(
        <>
            <h1>Atividade 3</h1>
            <Gallery />
            <ProfileTWO />
            <TodoList />
            <TodoListTWO />
            <br />
            {/* <ProfileLin /> */}
            <Profile_avat2 />
            <ProfileKat />
            <PackingList />
            <List />
            <App />
            <TeaSet />
            <Link to="/">Retornar a página principal</Link>
        </>
        
    );
}

