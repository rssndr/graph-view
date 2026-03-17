<?php
/**
 * Template Name: Core Values Page
 * 
 * This is a custom page template for displaying the Core Values page.
 * To use this template:
 * 1. Upload this file to your active theme directory
 * 2. Create a new page in WordPress
 * 3. Select "Core Values Page" from the Page Attributes > Template dropdown
 * 4. Publish the page
 */

get_header(); ?>

<style>
.core-values-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 3rem 1rem;
}

.core-values-header {
    text-align: center;
    margin-bottom: 3rem;
}

.core-values-title {
    font-size: 2.25rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 1rem;
}

.core-values-subtitle {
    font-size: 1.125rem;
    color: #4b5563;
}

.core-values-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.core-values-card {
    background-color: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    padding: 1.5rem;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    transition: box-shadow 0.3s ease;
}

.core-values-card:hover {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.core-values-icon-container {
    width: 3rem;
    height: 3rem;
    margin-bottom: 1rem;
    background-color: #3b82f6;
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.core-values-icon {
    width: 2rem;
    height: 2rem;
    color: #ffffff;
}

.core-values-card-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 0.5rem;
}

.core-values-card-text {
    color: #4b5563;
    line-height: 1.625;
}

.core-values-placeholder {
    margin-bottom: 3rem;
    background-color: #f9fafb;
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    padding: 2rem;
    min-height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.core-values-placeholder-large {
    background-color: #f9fafb;
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    padding: 2rem;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.core-values-placeholder-text {
    color: #6b7280;
    text-align: center;
}

/* Responsive Design */
@media (min-width: 768px) {
    .core-values-title {
        font-size: 3rem;
    }
    
    .core-values-subtitle {
        font-size: 1.25rem;
    }
    
    .core-values-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .core-values-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}
</style>

<div class="core-values-container">
    <!-- Header Section -->
    <div class="core-values-header">
        <h1 class="core-values-title">
            Our Core Values
        </h1>
        <p class="core-values-subtitle">
            Principles guiding our movement for a stronger, united Europe.
        </p>
    </div>

    <!-- Core Values Grid -->
    <div class="core-values-grid">
        <!-- Unity & Strength -->
        <div class="core-values-card">
            <div class="core-values-icon-container">
                <svg class="core-values-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <h3 class="core-values-card-title">Unity & Strength</h3>
            <p class="core-values-card-text">
                A federal union with decisive action. No more Member State vetoes, and a true democratically-elected European government.
            </p>
        </div>

        <!-- Strategic Autonomy -->
        <div class="core-values-card">
            <div class="core-values-icon-container">
                <svg class="core-values-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
            <h3 class="core-values-card-title">Strategic Autonomy</h3>
            <p class="core-values-card-text">
                Leading in global trade while securing independence in defense, energy, and tech to safeguard our sovereignty.
            </p>
        </div>

        <!-- Defense & Security -->
        <div class="core-values-card">
            <div class="core-values-icon-container">
                <svg class="core-values-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h3 class="core-values-card-title">Defense & Security</h3>
            <p class="core-values-card-text">
                Secure external frontiers, an integrated army, and full readiness against terrorism, cyberwarfare, and aggression.
            </p>
        </div>

        <!-- Migration Control -->
        <div class="core-values-card">
            <div class="core-values-icon-container">
                <svg class="core-values-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
            </div>
            <h3 class="core-values-card-title">Migration Control</h3>
            <p class="core-values-card-text">
                Strict border control. We support only skilled immigration with high integration standards based on European values.
            </p>
        </div>

        <!-- Support Ukraine -->
        <div class="core-values-card">
            <div class="core-values-icon-container">
                <svg class="core-values-icon" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                </svg>
            </div>
            <h3 class="core-values-card-title">Support Ukraine</h3>
            <p class="core-values-card-text">
                Ukraine defends Europe's eastern flank. We pledge full military, economic, and political support against the enemy.
            </p>
        </div>

        <!-- Heritage & Culture -->
        <div class="core-values-card">
            <div class="core-values-icon-container">
                <svg class="core-values-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </div>
            <h3 class="core-values-card-title">Heritage & Culture</h3>
            <p class="core-values-card-text">
                We cherish our heritage and traditions, protecting cultural diversity and ensuring demographic renewal.
            </p>
        </div>

        <!-- Enlightenment Legacy -->
        <div class="core-values-card">
            <div class="core-values-icon-container">
                <svg class="core-values-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
            </div>
            <h3 class="core-values-card-title">Enlightenment Legacy</h3>
            <p class="core-values-card-text">
                Equality before the law and zero tolerance for corruption. We reject all divisive ideologies that threaten unity.
            </p>
        </div>

        <!-- Economic Powerhouse -->
        <div class="core-values-card">
            <div class="core-values-icon-container">
                <svg class="core-values-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>
            </div>
            <h3 class="core-values-card-title">Economic Powerhouse</h3>
            <p class="core-values-card-text">
                Nuclear energy, reindustrialisation, and a true Capital Markets Union to drive growth and self-reliance.
            </p>
        </div>

        <!-- Democracy -->
        <div class="core-values-card">
            <div class="core-values-icon-container">
                <svg class="core-values-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
            </div>
            <h3 class="core-values-card-title">Democracy</h3>
            <p class="core-values-card-text">
                Defending free speech and legitimacy while countering foreign interference in our politics and media.
            </p>
        </div>
    </div>

    <!-- Chatbot Section Placeholder -->
    <div class="core-values-placeholder">
        <p class="core-values-placeholder-text">Chatbot Section</p>
    </div>

    <!-- Graph Section Placeholder -->
    <div class="core-values-placeholder-large">
        <p class="core-values-placeholder-text">Graph Section</p>
    </div>
</div>

<?php get_footer(); ?>
