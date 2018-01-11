<?php 
	// Header. Common to all screens
$page = $_GET['page'];
?>
<header>
    <div class="top-header">
        <div class="container">
             <a href="/" title="Return to BriteCore homepage" id="logo">
                <img src="/images/logo.png" alt="BriteCore logo" />
            </a>    

            <a href="#" id="profile">
                <img src="/images/profile.png" alt="Persona profile"/>
            </a>
        </div>
    </div>

    <nav>
        <div class="bottom-header">
            <div class="container">
                <a href="/" class="<?php echo ( $page =='' )? 'nav-item active': 'nav-item '; ?>">
                    <span class="light-text uppercase">Agencies</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M2 32h26a2 2 0 0 0 2-2V18a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2V2a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2v8a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2zm0-2v-4h2v4H2zm2-12v2H2v-2h2zm-2-2v-2h2v2H2zm2 6v2H2v-2h2zm2-2v-2h2v2H6zm2 2v2H6v-2h2zm-2-6v-2h2v2H6zm0 14v-4h2v4H6zm2-18H6v-2h2v2zm-4 0H2v-2h2v2zm12 18v-4h2v4h-2zm-2-20v2h-2v-2h2zm-2-2V6h2v2h-2zm2 6v2h-2v-2h2zm0 4v2h-2v-2h2zm0 4v2h-2v-2h2zm2-2v-2h2v2h-2zm2 2v2h-2v-2h2zm-2-6v-2h2v2h-2zm0-4v-2h2v2h-2zm0-4V6h2v2h-2zm2-4h-2V2h2v2zm-4 0h-2V2h2v2zm-2 22h2v4h-2v-4zm12-2h-2v-2h2v2zm2-2h2v2h-2v-2zm0 4h2v4h-2v-4zm2-6h-2v-2h2v2zm-4 0h-2v-2h2v2zm-2 6h2v4h-2v-4z"/></svg>
                </a>

                <a href="../agents.php?page=agents" class="<?php echo ( $page =='agents' )? 'nav-item active': 'nav-item '; ?>">
                    <span class="light-text uppercase">Agents</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M30 8h-6V4a2 2 0 0 0-2-2H10a2 2 0 0 0-2 2v4H2a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2zM10 4h12v4H10V4z"/></svg>
                </a>
                <a href="../policies.php?page=policies" class="<?php echo ( $page =='policies' )? 'nav-item active': 'nav-item '; ?>">
                    <span class="light-text uppercase">Policies</span>
                    <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M4 28h2v2a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2zm20-2H4V2h20v24zm4-20v24H8v-2h16a2 2 0 0 0 2-2V6h2zM10 7a1 1 0 0 0 1 1h10a1 1 0 0 0 0-2H11a1 1 0 0 0-1 1zm-3 7h14a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2zm0 4h14a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2zm0 4h14a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2z"/></svg>
                </a>
                <a href="../settings.php?page=settings" class="<?php echo ( $page =='settings' )? 'nav-item active': 'nav-item '; ?>">
                    <span class="light-text uppercase">Settings</span>
                    <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M27.526 12.682a11.906 11.906 0 0 0-1.028-2.492l1.988-4.182a16.159 16.159 0 0 0-2.494-2.494L21.81 5.502a11.97 11.97 0 0 0-2.492-1.028L17.762.102C17.184.038 16.596 0 16 0s-1.184.038-1.762.102l-1.556 4.372c-.874.252-1.71.596-2.49 1.028L6.008 3.514a16.159 16.159 0 0 0-2.494 2.494l1.988 4.182a11.97 11.97 0 0 0-1.028 2.492L.102 14.238C.038 14.816 0 15.404 0 16s.038 1.184.102 1.762l4.374 1.556c.252.876.594 1.71 1.028 2.492l-1.988 4.182c.738.92 1.574 1.758 2.494 2.494l4.182-1.988c.78.432 1.616.776 2.492 1.028L14.24 31.9c.576.062 1.164.1 1.76.1s1.184-.038 1.762-.102l1.556-4.374c.876-.252 1.71-.594 2.492-1.028l4.182 1.988a16.071 16.071 0 0 0 2.494-2.494l-1.988-4.182a11.97 11.97 0 0 0 1.028-2.492L31.9 17.76c.062-.576.1-1.164.1-1.76s-.038-1.184-.102-1.762l-4.372-1.556zM16 24a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm-4-8a4 4 1080 1 0 8 0 4 4 1080 1 0-8 0z"/></svg>
                </a>
            </div> 
        </div>
    </nav>   
</header>