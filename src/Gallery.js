import React from 'react';
import { getImageUrl } from './Utils.js';
import { people } from './Utils.js';


<article>
    <h1>My first Component</h1>
    <ol>
        <li>Compnents: UI Building Blocks</li>
        <li>Defining a Component</li>
        <li>Using a Component</li>
    </ol>
</article>

export function Profile(){
    return (
        <>
        <img
        src="https://i.imgur.com/MK3eW3Am.jpg"
        alt="Katherine Johnson"
        width={100}
        height={100}
        />
        <br/> 
        {/* <img
        src="https://i.imgur.com/QIrZWGIs.jpg"
        alt="Alan L. Hart"
        width={100}
        height={100}
        /> */}
        </>
    );
}


export function ProfileTWO(){
    return (
        <img
        src="https://i.imgur.com/QIrZWGIs.jpg"
        alt="Alan L. Hart"
        />
    );
}

export default function Gallery(){
    return (
        <section>
            <h1>Amazing scientists</h1>
            <Profile />
            <Profile />
            <Profile />        
        </section>
    );
}

export function TodoList(){
    return (
        <>
        <h1>Hedy Lamarr's Todos</h1>
        <img
        src="https://i.imgur.com/yXOvdOSs.jpg"
        alt="Hedy Lamarr"
        class="photo"
        />
        <ul>
            <li>Invent new traffic lights</li>
            <li>Rehearse a movie scene</li>
            <li>Improve the spectrum tecnology</li>
        </ul>
        </>
    );
}


/*export function Avatar(){
    const avatar = "https://i.imgur.com/7vQD0fPs.jpg";
    const descricao = "Gregorio Y. Zara";
    const name = "Gregorio Y. Zara";
	return(
    <>
    <h1>{name}'s To do List</h1>
    <img
	className="avatar"
	src={avatar}
	alt={descricao}
	/>
    </>
	);
}*/

const today = new Date();

function formatDate(date) {
    return new Intl.DateTimeFormat(
        'en-US',
        {weekday: 'long'}
    ).format(date);
}

const person = {
	name: 'Gregorio Y.Zara',
	theme: {
		backgroundColor: 'black',
		color: 'pink'
	}
};

export function TodoListTWO(){
    const avatar = "https://i.imgur.com/7vQD0fPs.jpg";
    return (
        <>
        <h1>To do List for {formatDate(today)}</h1>
        <div style={person.theme}>
        <h1>{person.name}'s Todos</h1>
        <img
	    className="avatar"
	    src={avatar}
        />
		<ul>
            <li>Improve the videophone</li>
            <li>Prepare aeronautics lectures</li>
            <li>Work on the alcohol-fuelled engine</li>
        </ul>
        </div>
        </>
    );
}


// export function Avatar({ person, size }) {
//     return (
//         <img
//             className='avat'
//             src={`https://i.imgur.com/${person.imageId}.jpg`}
//             alt={person.name}
//             width={size}
//             height={size}
//         />
//     );
// }

// export function ProfileLin() {
//     return (
//         <Avatar 
//             person={{ name: 'Lin Lanying', imageId: '1bX5QH6' }} 
//             size={100} 
//         />
//     );
// }

// export function AvatarKat({ person, size }) {
//     return (
//         <img
//             className='avat'
//             src={`https://i.imgur.com/${person.imageId}.jpg`}
//             alt={person.name}
//             width={size}
//             height={size}
//         />
//     );
// }


// export function ProfileLKat(){
//     return (
//         <div>
//             <Avatar size={100}
//             person={{
//                 name: 'Katsuko Saruhashi',
//             }}
//         </div>
//     );
// }

// function Avatar2 ({person, size}) {
// 	return(
// 		<img
// 			className='avatar2'
// 			src={getImageUrl(person)}
// 			alt={person.name}
// 			width={size}
// 			heigth={size}
// 		/>
// 	);
// }

// export function Profile_avat2(){
// 	return(
// 		<div>
// 			<Avatar2
// 				size={100}
// 				person={{
// 					name: 'Katsuko Saruhashi',
// 					imageId: 'YfeOqp2'
// 				}}
// 			/>
// 			<Avatar2
// 				size={80}
// 				person={{
// 					name: 'Aklilu Lemma',
// 					imageId: 'OKS67lh'
// 				}}
// 			/>
// 			<Avatar2
// 				size={50}
// 				person={{
// 					name: 'Lin Lanying',
// 					imageId: '1bX5QH6'
// 				}}
// 			/>
// 		</div>
// 	);
// }

function Avatar2(props) {
	let person = props.person;
	let size = props.size;

	return (
		<img
			className={`avatar2 ${props.isSepia ? 'sepia' : ''} ${props.thickBorder ? 'thick-border' : ''}`}
			src={getImageUrl(person)}
			alt={person.name}
			width={size}
			height={size}
		/>
	);
}

export function Profile_avat2() {
	return (
		<div>
			{/* <Avatar2
				person={{
					name: 'Katsuko Saruhashi',
					imageId: 'YfeOqp2'
				}}
				size={100}
				isSepia={true}
				thickBorder={true}
			/> */}
			<Avatar2
				person={{
					name: 'Aklilu Lemma',
					imageId: 'OKS67lh'
				}}
				size={80}
				isSepia={false}
				thickBorder={true}
			/>
			<Avatar2
				person={{
					name: 'Lin Lanying',
					imageId: '1bX5QH6'
				}}
				size={50}
				isSepia={true}
				thickBorder={false}
			/>
		</div>
	);
}

export function AvatKatsuko({person, size}) {
    return(
        <img
            className="avatarkat"
            src={getImageUrl(person)}
            alt={person.name}
            width={size}
            height={size}
        />
    );
}

function Card({ children }) {
    return(
        <div className='card'>
            {children}
        </div>
    );
}

export function ProfileKat(){
    return(
        <Card>
            <AvatKatsuko
                size={100}
                person={{
                    name: 'Katsuko Saruhashi',
                    imageId: 'YfeOqp2'
                }}
            />
        </Card>
    );
}

function Item({ name, isPacked }) {
    // if(isPacked){
    //     return <li className='item'>{name}✓</li>;
    //     // return null;
    //     }
    //     return <li className='item'>{name}</li>;

    // return(
    //     <li classNme='item'>
    //     {isPacked ? ( <del> { name + '✓' } </del> ):( name )}
    //     </li>
    //     );
    let itemContent = name;
    if(isPacked){
        itemContent = (<del> {name + '✓'} </del>);
    }
    return(
        <li className='item'>
            {itemContent}
        {/* {name} {isPacked && '✓'} */}
        </li>
    );
}

export function PackingList(){
    return (
        <section>
            <h1>Sally Ride's Packing List</h1>  
            <ul>
                <Item
                    isPacked={true}
                    name='Space suit'/>
                <Item
                    isPacked={true}
                    name='Helmet with a golden leaf'
                />
                <Item
                    isPacked={false}
                    name='Photo os Tam'
                />
            </ul>
        </section>
    );
}


    
    
export function List() {
    const listItems = people.map(person =>
        <li key={person.id}>
            <img
                src={getImageUrl(person)}
                alt={person.name}
            />
            <p>
                <b>{person.name}:</b>
                {' ' + person.profession + ' '}
                known for {person.accomplishment}
            </p>
        </li>
    );
    return <ul>{listItems}</ul>;
}

function Recipe({ drinkers }) {
    return (
        <ol>
            <li>Boil {drinkers} cup of water. </li>
            <li>Add {drinkers} spoons of tea and {0.5 * drinkers} spoons </li>
            <li>Add {0.5 * drinkers} cups of milk to boil and sugar to tea </li>
        </ol>
    );
}

export function App() {
    return (
        <section>
            <h1>Spiced Chai Recipe</h1>
            <h2>For two</h2>
            <Recipe drinkers={2} />
            <h2>For a gathering</h2>
            <Recipe drinkers={4} />
        </section>
    );
}

function Cup({ guest }) {
    return <h2>Tea cup for guest #{guest}</h2>;
}

export function TeaSet() {
    return (
        <>
            <Cup guest={1} />
            <Cup guest={2} />
            <Cup guest={3} />
        </>
    );
}
