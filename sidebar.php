<style>
    :root{
    interpolate-size: allow-keywords;
}

.sidebar{
    position: fixed;
    width: 4rem;
    background-color: white;
    top: 0;
    left: 0;
    height: 100%;
    border-right: 3px solid rgba(0, 0, 0, 0.05);
}

 nav a {
      white-space: nowrap;
      width: 2rem;
      overflow-x: clip;
      transition: width 0.35s ease;
      font-optical-sizing: auto;
      
      &:hover,
      &:focus-visible {
        width: max-content;
      }
    }

@layer layout{
    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    
        border: none;
        padding: 0.5rem 0;
        overflow-x: visible;
    
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    
        width: 4.5rem;
        padding: 1rem;
      }

      nav ul {
        a {
          display: grid;
          grid-template-columns: 1.5rem auto;
          gap: 1rem;
          padding: 0.5rem;
          font-size: 1rem;
          transition-duration: 0.25s;
          align-items: center;
          background: white;
          border-radius: 0.5rem;
          color: black;
          text-decoration: none;
    
          &:hover,
          &:focus-visible {
            background: white;
            color: #333;
          }
        }
      }
    }
</style>
<div>
    <nav class="sidebar">
    <ul>
        <li><a href="create.php"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22ZM12 8.25C12.4142 8.25 12.75 8.58579 12.75 9V11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H12.75L12.75 15C12.75 15.4142 12.4142 15.75 12 15.75C11.5858 15.75 11.25 15.4142 11.25 15V12.75H9C8.58579 12.75 8.25 12.4142 8.25 12C8.25 11.5858 8.58579 11.25 9 11.25H11.25L11.25 9C11.25 8.58579 11.5858 8.25 12 8.25Z" fill="#000000"></path> </g></svg>Tambah User</a></li>
        <li><a href="logout.php"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>Logout</a></li>
    </ul>
    </nav>
</div>
