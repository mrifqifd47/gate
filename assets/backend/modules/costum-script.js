// // cons flashdata = $('.flash-data').data('flashdata');

// // tombol hapus
  
// <script type="text/javascript">
// const flashData = document.getElementById("flash-data");
//     if(flashData) {

//       const notifType = flashData.getAttribute('data-type');
//       const notifMsg = flashData.getAttribute('data-message');

//       Swal.fire({
//         title: notifType,
//         text: notifMsg,
//         icon: notifType,
//       });
//     }

// $('.btn-hapus').on('click', function (e){

//   e.preventDefault();
//   const href  = $(this).attr('href');

//   Swal.fire({
//       title: 'Are you sure?',
//       text: "You won't be able to revert this!",
//       icon: 'warning',
//       showCancelButton: true,
//       confirmButtonColor: '#3085d6',
//       cancelButtonColor: '#d33',
//       confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//       if (result.isConfirmed) {
//         document.location.href = href;
//       }
//   })
// });
// </script>
 
// $('.btn-cek').on('click', function (e){

//   e.preventDefault();
//   const href  = $(this).attr('href');

//   Swal.fire({
   
 
//     }) 
// });

// $('.btn-cekid').on('click', function (){
//     Swal.fire({
//         title: 'Do you want to save the changes?',
//         showDenyButton: true,
//         showCancelButton: true,
//         confirmButtonText: 'Save',
//         denyButtonText: `Don't save`,
//       }).then((result) => {
//         /* Read more about isConfirmed, isDenied below */
//         if (result.isConfirmed) {
//           Swal.fire('Saved!', '', 'success')
//         } else if (result.isDenied) {
//           Swal.fire('Changes are not saved', '', 'info')
//         }
//       })
 
     
// }); 