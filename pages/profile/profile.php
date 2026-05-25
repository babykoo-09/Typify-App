<?php include '../../includes/header.php'; ?>
<?php include '../../includes/navbar.php'; ?>

<div class="profile-container fade-in">
    <!-- 1. COVER BANNER -->
    <div class="profile-cover">
        <div class="cover-gradient"></div>
        <button class="edit-cover-btn"><i class="fas fa-camera"></i> Change Cover</button>
    </div>

    <div class="container">
        <!-- 2. MAIN HEADER -->
        <header class="profile-main-header card">
            <div class="profile-identity">
                <div class="profile-avatar-wrap">
                    <div class="typify-logo-container logo-xl" id="avatar-icon-trigger-main">
                        <div class="typify-app-logo">T</div>
                        <div class="status-indicator active"></div>
                    </div>
                </div>
                <div class="profile-info">
                    <h1 class="user-display-name">John Smith <i class="fas fa-check-circle verified-blue"></i></h1>
                    <p class="user-tagline">@john_typify • Expert Storyteller</p>
                    <div class="profile-badges">
                        <span class="badge badge--premium"><i class="fas fa-crown"></i> VIP Writer</span>
                        <span class="badge badge--level">Lvl 24</span>
                    </div>
                </div>
                <div class="profile-main-actions">
                    <button class="primary-btn" id="btn-edit-profile">Edit Profile</button>
                    <button class="btn-icon-blur"><i class="fas fa-cog"></i></button>
                </div>
            </div>

            <div class="profile-extended-stats">
                <div class="ext-stat">
                    <strong>12k</strong>
                    <span>Reads</span>
                </div>
                <div class="ext-stat">
                    <strong>1.5k</strong>
                    <span>Fans</span>
                </div>
                <div class="ext-stat">
                    <strong>45</strong>
                    <span>Awards</span>
                </div>
                <div class="ext-stat">
                    <strong>98%</strong>
                    <span>Retention</span>
                </div>
            </div>
        </header>

        <div class="profile-content-layout">
            <!-- 3. SIDEBAR (BIO & VIP) -->
            <aside class="profile-sidebar">
                <div class="card bio-card">
                    <h4>About Me</h4>
                    <p>Writing my way through the neon dreams of the future. Passionate about world-building and character arcs.</p>
                    <hr>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-discord"></i></a>
                    </div>
                </div>

                <!-- INTEGRATED VIP WIDGET -->
                <div class="card premium-card--vip mini-vip">
                    <div class="premium-header-small">
                        <span class="vip-status-text">PREMIUM STATUS: <strong>ACTIVE</strong></span>
                    </div>
                    <div class="premium-quick-actions">
                        <div class="q-action">
                            <span>Offline Mode</span>
                            <label class="toggle-switch">
                                <input type="checkbox" id="profile-toggle-offline" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- 4. MAIN TABS & FEED -->
            <main class="profile-feed">
                <div class="profile-tabs card">
                    <button class="profile-tab-link active" data-target="published">Published (24)</button>
                    <button class="profile-tab-link" data-target="reading-list">Reading List</button>
                    <button class="profile-tab-link" data-target="activity">Activity</button>
                </div>

                <div id="tab-published" class="p-tab-content active">
                    <div class="book-grid">
                        <article class="book-card card-hover-pop">
                            <div class="book-card__cover-wrapper">
                                <img src="https://via.placeholder.com/150x220" alt="Cover" class="book-card__cover">
                            </div>
                            <div class="book-card__content">
                                <h4 class="book-card__title">The Silent Echo</h4>
                                <p class="book-card__author">Status: Completed</p>
                            </div>
                        </article>
                        <!-- ... more books ... -->
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
<script src="../../js/app.js"></script>
