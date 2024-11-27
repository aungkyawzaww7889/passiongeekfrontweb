// Start Header 
function togglemenu(ele){
    const getul = document.querySelector('ul');
    ele.classList.contains('togglemenus') ? (ele.classList.remove('togglemenus'),getul.classList.add("opacity-100")) : (ele.classList.add('togglemenus'), getul.classList.remove("opacity-100"));
    
}
// End Header 