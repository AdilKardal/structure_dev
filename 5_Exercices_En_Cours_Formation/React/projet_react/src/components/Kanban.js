// import React from "react";
// import Draggable from 'react-draggable';
// import "../styles/dnd.css"

// function Kanban() {


//     const board = [

//           {
//             id: 1, title: "To Do",backgroundColor: "#fff",
//             cards: [
//               {
//                 id: 1,
//                 title: "Title 1",
//                 description: "Card content"
//               },
//               {
//                 id: 2,
//                 title: "Card title 2",
//                 description: "Card content"
//               },
//               {
//                 id: 3,
//                 title: "Card title 3",
//                 description: "Card content"
//               }
//             ]
//           },

//           {
//             id: 2,title: "Doing", cards: [
//               {
//                 id: 9,
//                 title: "Card title 9",
//                 description: "Card content"
//               }
//             ]
//           },

//           {
//             id: 3, title: "Done", cards: [
//               {
//                 id: 10,
//                 title: "Card title 10",
//                 description: "Card content"
//               },
//               {
//                 id: 11,
//                 title: "Card title 11",
//                 description: "Card content"
//               }
//             ]
//           }
//         ]
     

//       console.log(board[2].title);
      
//     return(
// <>

//     <div id="column">
//       <p>{board.map((tache, index) => 
//       <tr>
//         <td>{tache.id}</td>
//         <td>{tache.title}</td>
//         <td></td>
//       </tr>
      
//        {board(index).cards.map((card) => 
//       <tr>
//         <td>{card.description}</td>

//       </tr> )}</p>)}
//     </div>
// </>
 
//     )
// }

// export default Kanban