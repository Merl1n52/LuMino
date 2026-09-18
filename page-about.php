<?php
/**
 * Template Name: About Page
 * Template for displaying About Studio information (Dark Edition)
 *
 * @package Lumino
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="lumino-dark-hero">
        <div class="lumino-container">
            <div class="lumino-about-grid">
                <!-- Left Column: Bio & Philosophy -->
                <div>
                    <span class="lumino-badge-red" style="margin-bottom: 24px;"><?php esc_html_e('About Studio', 'lumino'); ?></span>
                    <h1 class="lumino-section-huge-title" style="font-size: clamp(2.5rem, 5.5vw, 4.5rem); margin-top: 16px; margin-bottom: 32px; line-height: 1.05;">
                        <?php esc_html_e('Interfaces designer & creative director crafting digital experiences and visual systems.', 'lumino'); ?>
                    </h1>
                    <p style="font-size: 16px; line-height: 1.7; color: var(--text-secondary); max-width: 620px; margin-bottom: 24px;">
                        <?php esc_html_e('Operating at the intersection of typography, minimalist interfaces, and engineering. Focused on building high-impact brand identities, custom digital tools, and scalable design systems.', 'lumino'); ?>
                    </p>
                    <p style="font-size: 16px; line-height: 1.7; color: var(--text-secondary); max-width: 620px;">
                        <?php esc_html_e("Co-founder of 1988, a hardware art focused studio. Available for select client partnerships, art direction, and digital consulting worldwide.", 'lumino'); ?>
                    </p>
                </div>

                <!-- Right Column: Profile Photo -->
                <div class="lumino-about-photo" style="border: 1px solid var(--border-color);">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/me.jpg'); ?>" alt="Lumino Studio Profile" loading="eager">
                </div>
            </div>

            <!-- Experience Timeline -->
            <div class="lumino-timeline" style="border-top-color: var(--border-color); margin-top: 80px; padding-top: 60px;">
                <div class="lumino-section-header-row" style="margin-bottom: 30px;">
                    <h2 class="lumino-section-huge-title" style="font-size: clamp(2rem, 3.5vw, 3rem);"><?php esc_html_e('Experiences & Timeline', 'lumino'); ?></h2>
                    <span class="lumino-badge-subtle">2019 &mdash; Present</span>
                </div>

                <div class="lumino-timeline-list">
                    <div class="lumino-timeline-item" style="border-bottom-color: var(--border-color);">
                        <span class="lumino-timeline-year">2024 &mdash; Present</span>
                        <span class="lumino-timeline-role">Creative Director</span>
                        <span class="lumino-timeline-company">Company.co &amp; 1988 Hardware Art</span>
                    </div>
                    <div class="lumino-timeline-item" style="border-bottom-color: var(--border-color);">
                        <span class="lumino-timeline-year">2022 &mdash; 2024</span>
                        <span class="lumino-timeline-role">Lead Interface Designer</span>
                        <span class="lumino-timeline-company">Pixelwave Studios &amp; Horizon Collective</span>
                    </div>
                    <div class="lumino-timeline-item" style="border-bottom-color: var(--border-color);">
                        <span class="lumino-timeline-year">2021 &mdash; 2022</span>
                        <span class="lumino-timeline-role">Junior Brand Designer</span>
                        <span class="lumino-timeline-company">Ember &amp; Co.</span>
                    </div>
                    <div class="lumino-timeline-item" style="border-bottom-color: var(--border-color);">
                        <span class="lumino-timeline-year">2019 &mdash; 2021</span>
                        <span class="lumino-timeline-role">Design Intern</span>
                        <span class="lumino-timeline-company">Studio Driftwood</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
