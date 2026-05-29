<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Feliz Cumpleaños Cristina! - La Guerrera Silenciosa (Single Oficial)</title>
    <meta name="description" content="Escucha el homenaje especial para Cristina por sus 26 primaveras. ¡Un regalo de sus amigos de siempre! 🎂🎵">
    
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    
    <meta property="og:title" content="¡Feliz Cumpleaños Cristina! - La Guerrera Silenciosa (Single Oficial)">
    <meta property="og:description" content="Escucha el homenaje especial para Cristina por sus 26 primaveras. ¡Un regalo de sus amigos de siempre! 🎂🎵">
    <meta property="og:site_name" content="Capibara Sound">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/imagen/81d076ef-d4e9-4bd9-b7d0-011a0ecbc4f8-Photo-Grid_11zon.webp">
    <meta property="og:image:secure_url" content="assets/imagen/81d076ef-d4e9-4bd9-b7d0-011a0ecbc4f8-Photo-Grid_11zon.webp">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="¡Feliz Cumpleaños Cristina! - La Guerrera Silenciosa (Single Oficial)">
    <meta name="twitter:description" content="Escucha el homenaje especial para Cristina por sus 26 primaveras. ¡Un regalo de sus amigos de siempre! 🎂🎵">
    <meta name="twitter:image" content="assets/imagen/81d076ef-d4e9-4bd9-b7d0-011a0ecbc4f8-Photo-Grid_11zon.webp">

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js" defer></script>
    <style>
	    :root {
            --gold: #e5c07b;
            --gold-dark: #c5a059;
            --green: #2ebd85;
            --green-dim: #40dd9f;
            --bg-deep: #050a08;
            --bg-card: rgba(19, 28, 25, 0.95);
            --bg-mid: #1c2824;
            --bg-low: #0d1412;
            --border: rgba(45, 66, 59, 0.6);
            --text-main: #ffffff;
            --text-dim: #a2b5ae;
            --text-body: #cbdad5;
            --red: #e53e3e;
            --red-dim: #fc8181;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        html, body {
            max-width: 100%;
            width: 100%;
            min-height: 100vh;
            background-color: #050a08;
            color: #ffffff;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1b352b 0%, #091310 70%, #050a08 100%);
            z-index: -1;
        }

        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #040807;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #226b50;
            border-radius: 10px;
            border: 2px solid #040807;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #2ebd85;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 15px;
        }

        .particles-bg {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            animation: floatParticle linear infinite;
        }

        @keyframes floatParticle {
            0% { transform: translateY(110vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 0.6; }
            100% { transform: translateY(-10vh) rotate(720deg); opacity: 0; }
        }

        .card-container {
            background: rgba(19, 28, 25, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.9), 0 0 30px rgba(46, 189, 133, 0.15);
            width: 100%;
            max-width: 520px;
            padding: 20px;
            text-align: center;
            border: 1px solid rgba(45, 66, 59, 0.6);
        }

        .badge-birthday {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(197,160,89,0.15), rgba(197,160,89,0.05));
            color: var(--gold);
            padding: 9px 18px;
            border-radius: 20px;
            font-size: 0.82rem;
            font-weight: 700;
            margin-bottom: 22px;
            border: 1px solid rgba(197,160,89,0.5);
            letter-spacing: 0.5px;
            font-family: 'DM Sans', sans-serif;
            animation: badgePulse 3s ease-in-out infinite;
        }

        @keyframes badgePulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(197,160,89,0.3); }
            50% { box-shadow: 0 0 0 8px rgba(197,160,89,0); }
        }

        @media (min-width: 410px) {
            .badge-birthday {
                font-size: 0.85rem;
                padding: 8px 18px;
                letter-spacing: 1px;
            }
        }

        .cover-wrapper {
            position: relative;
            width: 100%;
            aspect-ratio: 1 / 1;
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 24px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
            border: 2px solid #c5a059;
            background: #101816;
        }

        .cover-wrapper:not(.image-is-loaded)::after {
            content: "";
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(46, 189, 133, 0.15), transparent);
            transform: translateX(-100%);
            animation: skeletonHardware 1.6s infinite ease-in-out;
            will-change: transform;
        }

        .cover-wrapper.image-is-loaded {
            background: transparent !important;
        }

        .cover-art {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
        }

        .cover-art.loaded {
            opacity: 1;
        }

        .track-header-block {
            margin-bottom: 20px;
            padding: 0 5px;
            width: 100%;
        }

        .track-main-title {
            font-size: 1.5rem;
            color: #e5c07b;
            margin-bottom: 10px;
            letter-spacing: 0.3px;
            text-transform: uppercase;
            font-weight: 800;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7);
            background: linear-gradient(135deg, #ffffff 40%, #e5c07b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        @media (min-width: 400px) {
            .track-main-title { font-size: 1.85rem; }
        }

        .track-dedication-badge {
            display: inline-block;
            background: rgba(46, 189, 133, 0.08);
            border: 1px solid rgba(46, 189, 133, 0.3);
            padding: 6px 14px;
            border-radius: 30px;
            color: #40dd9f;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 12px;
            max-width: 100%;
            overflow-wrap: break-word;
        }

        .track-dedication-badge span {
            color: #e5c07b;
            margin-right: 4px;
        }

        .track-meta-subtitle {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #9cb0a8;
            font-size: 0.82rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 600;
        }

        .track-meta-subtitle::before,
        .track-meta-subtitle::after {
            content: '';
            display: block;
            flex: 1;
            height: 1px;
            background: linear-gradient(to right, transparent, #2d423b, transparent);
            max-width: 40px;
        }

        .track-meta-subtitle .separator {
            color: #c5a059;
            font-size: 0.7rem;
        }

        .dedication-box {
            background: rgba(28, 40, 36, 0.5);
            border-left: 3px solid #2ebd85;
            padding: 15px;
            border-radius: 8px;
            text-align: left;
            margin-bottom: 24px;
        }

        .dedication-box h2 {
            font-size: 0.9rem;
            color: #e5c07b;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .dedication-box p {
            font-size: 0.85rem;
            color: #cbdad5;
            line-height: 1.5;
            font-style: italic;
        }

        @media (min-width: 400px) {
            .dedication-box { padding: 18px; }
            .dedication-box h2 { font-size: 0.95rem; }
            .dedication-box p { font-size: 0.9rem; }
        }
		
		.signature-list {
			font-size: 0.78rem;
			color: var(--text-dim);
			text-align: right;
			border-top: 1px solid rgba(45, 66, 59, 0.3);
			padding-top: 6px;
		}

        .custom-player {
            background: linear-gradient(135deg, #172420 0%, #101816 100%);
            border: 1px solid #2d423b;
            border-radius: 20px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.4);
        }

        @media (min-width: 400px) {
            .custom-player { padding: 20px; }
        }

        .player-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 18px;
            width: 100%;
        }

        @media (min-width: 380px) {
            .player-controls { gap: 16px; }
        }

        .nav-btn {
            background: none;
            border: none;
            color: #a2b5ae;
            cursor: pointer;
            transition: transform 0.08s ease, color 0.08s ease, background-color 0.08s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            flex-shrink: 0;
            touch-action: manipulation;
        }

        .nav-btn:hover {
            color: #ffffff;
            background: rgba(46, 189, 133, 0.1);
        }

        .nav-btn:active {
            transform: scale(0.92);
        }

        .nav-btn svg {
            width: 18px;
            height: 18px;
            fill: currentColor;
            display: block;
        }

        .play-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(145deg, #e5c07b 0%, #c5a059 100%);
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 20px rgba(197, 160, 89, 0.45);
            transition: transform 0.2s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.2s ease;
            flex-shrink: 0;
            position: relative;
            -webkit-tap-highlight-color: transparent;
        }

        .play-btn::after {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 2px solid rgba(229, 192, 123, 0.3);
            transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
        }

        @media (hover: hover) {
            .play-btn:hover {
                transform: scale(1.07);
                box-shadow: 0 8px 28px rgba(197, 160, 89, 0.7);
            }
            .play-btn:hover::after {
                inset: -8px;
                border-color: rgba(229, 192, 123, 0.15);
            }
        }

        .play-btn:active,
        .play-btn.active-press {
            transform: scale(1.07);
            box-shadow: 0 8px 28px rgba(197, 160, 89, 0.7);
        }
        
        .play-btn:active::after,
        .play-btn.active-press::after {
            inset: -8px;
            border-color: rgba(229, 192, 123, 0.15);
        }

        .play-icon-svg, .pause-icon-svg { width: 22px; height: 22px; fill: #0d1110; display: block; }
        .pause-icon-svg { display: none; }

        .nav-btn#loopBtn.loop-once { color: #e5c07b; }
        .nav-btn#loopBtn.loop-infinite { color: #2ebd85; }

        .progress-container {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            margin-bottom: 18px;
        }

        .time-label {
            font-size: 0.75rem;
            color: #a2b5ae;
            min-width: 35px;
            font-variant-numeric: tabular-nums;
        }

		.progress-bar-wrapper {
            flex: 1;
            position: relative;
            height: 8px;
            background: #1e2d29;
            border-radius: 4px;
        }

        .progress-buffer {
            position: absolute;
            left: 0; top: 0; height: 100%; width: 0%;
            background: rgba(46, 189, 133, 0.25);
            border-radius: 4px;
        }

        .progress-fill {
            position: absolute;
            left: 0; top: 0; height: 100%; width: 0%;
            background: linear-gradient(90deg, #2ebd85 0%, #40dd9f 100%);
            border-radius: 4px;
        }

        .progress-slider {
            position: absolute;
            left: 0; top: 0; width: 100%; height: 100%;
            -webkit-appearance: none; appearance: none;
            background: transparent; margin: 0; z-index: 3;
            cursor: pointer; outline: none;
        }

        .progress-slider::-webkit-slider-thumb {
            -webkit-appearance: none; width: 16px; height: 16px;
            border-radius: 50%; background: #ffffff; border: 2px solid #2ebd85;
            box-shadow: 0 0 5px rgba(0,0,0,0.6); cursor: pointer;
        }

        .player-tools-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            border-top: 1px solid #23352f;
            padding-top: 15px;
            width: 100%;
        }

        .volume-container {
            display: flex;
            align-items: center;
            gap: 8px;
            flex: 1;
            min-width: 140px;
        }

        .volume-btn {
            background: none; border: none; color: #a2b5ae;
            font-size: 1.1rem; cursor: pointer; display: flex;
            align-items: center; width: 24px; flex-shrink: 0;
            touch-action: manipulation;
        }

        .volume-slider-wrapper { position: relative; flex: 1; display: flex; align-items: center; }
        .volume-slider {
            width: 100%; -webkit-appearance: none; appearance: none;
            height: 6px; border-radius: 3px; outline: none; cursor: pointer;
            background: linear-gradient(to right, #2ebd85 100%, #1e2d29 0%);
        }

        .volume-slider::-webkit-slider-thumb {
            -webkit-appearance: none; width: 16px; height: 16px;
            border-radius: 50%; background: #ffffff; border: 2px solid #2ebd85;
            cursor: pointer; box-shadow: 0 0 5px rgba(0,0,0,0.5);
        }

        .volume-percentage { font-size: 0.72rem; color: #a2b5ae; min-width: 32px; text-align: right; font-variant-numeric: tabular-nums; }
        .speed-select-container { flex-shrink: 0; }
        .speed-select { background: #1c2824; color: #cbdad5; border: 1px solid #2d3f39; padding: 6px 10px; border-radius: 6px; font-size: 0.78rem; outline: none; cursor: pointer; }

        .download-wrapper { width: 100%; margin-top: 15px; margin-bottom: 5px; }
        .download-action-btn {
            background: rgba(46, 189, 133, 0.08); border: 1px solid rgba(46, 189, 133, 0.4);
            color: #2ebd85; padding: 12px 20px; border-radius: 12px; font-size: 0.85rem;
            text-decoration: none; font-weight: 600; display: inline-flex; align-items: center;
            justify-content: center; gap: 6px; transition: background-color 0.1s ease, color 0.1s ease, border-color 0.1s ease;
            width: 100%; touch-action: manipulation;
        }

        .download-action-btn:hover { background: #2ebd85; color: #0d1110; border-color: #2ebd85; }

        .accordion-container { margin-bottom: 12px; width: 100%; }
        .btn-accordion {
            background: none; border: 1px dashed #4a635a; color: #a2b5ae;
            padding: 12px 16px; border-radius: 20px; font-size: 0.85rem;
            cursor: pointer; width: 100%; display: flex; justify-content: center;
            align-items: center; gap: 8px; transition: border-color 0.1s ease, color 0.1s ease, background-color 0.1s ease;
            touch-action: manipulation;
        }

        .btn-accordion:hover { border-color: #2ebd85; color: #ffffff; background: rgba(46, 189, 133, 0.05); }

        .accordion-content {
            max-height: 0; overflow: hidden; transition: max-height 0.2s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.15s ease;
            will-change: max-height, opacity; opacity: 0; background: #0d1412; border-radius: 12px; text-align: left; width: 100%;
        }

        .lyrics-text { padding: 15px; font-size: 0.9rem; color: #b3c7c0; line-height: 1.7; max-height: 300px; overflow-y: auto; text-align: center; }
        .track-info-extended { padding: 15px; font-size: 0.79rem; color: #a3b8b0; }
        .track-info-section-title { color: var(--gold); font-weight: 700; font-size: 0.83rem; text-transform: uppercase; margin: 12px 0 6px 0; border-bottom: 1px solid #23352f; padding-bottom: 4px; display: flex; align-items: center; gap: 6px; }
        .track-info-section-title:first-child { margin-top: 0; }
        .track-info-row { display: flex; justify-content: space-between; gap: 10px; padding: 5px 0; border-bottom: 1px solid rgba(46,117,89,0.05); }
        .track-info-row span:last-child { text-align: right; font-weight: 600; color: var(--text-body); }

        .lyrics-tag {
            display: inline-block; color: #e5c07b; background: rgba(229, 192, 123, 0.08);
            border: 1px solid rgba(229, 192, 123, 0.2); padding: 3px 10px; border-radius: 12px;
            font-size: 0.7rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-top: 20px; margin-bottom: 10px;
        }
        
        .lyrics-text .lyrics-tag:first-child { margin-top: 0; }
        .lyrics-line { margin-bottom: 4px; }
		
        /* TRIVIA & TABS */
        .quiz-tabs { display: flex; border-bottom: 1px solid #23352f; background: #111a17; border-top-left-radius: 12px; border-top-right-radius: 12px; }
        .quiz-tab-btn { flex: 1; padding: 12px; background: none; border: none; color: var(--text-dim); font-size: 0.85rem; font-weight: bold; cursor: pointer; transition: color 0.15s, background-color 0.15s; outline: none; text-align: center; }
        .quiz-tab-btn.active { color: var(--gold); background: #0d1412; border-bottom: 2px solid var(--gold); }
        .quiz-tab-content { display: none; padding: 20px; }
        .quiz-tab-content.active { display: block; }
        .quiz-card { text-align: left; }
        
        /* Formulario de Inicio */
        .quiz-start-form { text-align: center; padding: 10px 0; }
        .quiz-start-form p { font-size: 0.9rem; color: var(--text-body); margin-bottom: 14px; }
        .quiz-input-name { width: 100%; padding: 12px 16px; background: #1c2824; border: 1px solid var(--border); border-radius: 8px; color: #fff; font-size: 0.9rem; margin-bottom: 14px; outline: none; text-align: center; transition: border-color 0.1s; }
        .quiz-input-name:focus { border-color: var(--green); }
        .btn-start-game { background: var(--green); color: #0d1110; border: none; padding: 10px 20px; border-radius: 20px; font-weight: bold; cursor: pointer; font-size: 0.85rem; transition: background-color 0.1s; }
        .btn-start-game:hover { background: var(--green-dim); }

        .quiz-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; border-bottom: 1px solid #23352f; padding-bottom: 6px; }
        .quiz-progress { font-size: 0.75rem; color: var(--text-dim); text-transform: uppercase; letter-spacing: 0.5px; }
        .quiz-score-badge { font-size: 0.75rem; color: var(--gold); font-weight: bold; background: rgba(229, 192, 123, 0.1); padding: 2px 8px; border-radius: 10px; }
        .quiz-q { font-size: 0.95rem; font-weight: bold; color: #fff; margin-bottom: 14px; line-height: 1.4; }
        .quiz-options { display: flex; flex-direction: column; gap: 8px; }
        .quiz-opt { background: #1c2824; border: 1px solid var(--border); padding: 11px 14px; border-radius: 8px; color: #fff; font-size: 0.85rem; cursor: pointer; text-align: left; transition: background-color 0.08s ease, border-color 0.08s ease, color 0.08s ease; outline: none; }
        
        @media (hover: hover) { .quiz-opt:hover { background: rgba(46,189,133,0.1); border-color: var(--green); } }
        
        .quiz-opt.correct-flash { background: rgba(46, 189, 133, 0.25) !important; border-color: #2ebd85 !important; color: #40dd9f !important; font-weight: bold; }
        .quiz-opt.wrong-flash { background: rgba(155, 44, 44, 0.25) !important; border-color: #e53e3e !important; color: #fc8181 !important; }

        .quiz-results-box { text-align: center; padding: 10px 0; }
        .results-trophy { font-size: 3rem; margin-bottom: 10px; animation: trophyBounce 1s ease infinite alternate; display: inline-block; }
        @keyframes trophyBounce { 0% { transform: translateY(0); } 100% { transform: translateY(-6px); } }
        .results-score-title { font-size: 1.1rem; font-weight: 800; color: var(--gold); margin-bottom: 6px; }
        .results-score-text { font-size: 1.4rem; font-weight: 900; color: #fff; margin-bottom: 14px; background: rgba(255,255,255,0.05); display: inline-block; padding: 4px 16px; border-radius: 20px; }
        .results-commentary { font-size: 0.88rem; color: var(--text-body); line-height: 1.5; font-style: italic; background: rgba(28, 40, 36, 0.6); padding: 14px; border-radius: 10px; border-left: 3px solid var(--gold); margin-bottom: 16px; }
        
        /* Mensaje de borrado (Ventana de 2 minutos) */
        .delete-window-box { background: rgba(229, 62, 62, 0.1); border: 1px solid rgba(229, 62, 62, 0.4); padding: 12px; border-radius: 10px; margin-bottom: 15px; text-align: center; }
        .delete-window-box p { font-size: 0.8rem; color: var(--text-body); margin-bottom: 8px; }
        .btn-delete-score { background: var(--red); color: white; border: none; padding: 6px 14px; border-radius: 15px; font-size: 0.75rem; font-weight: bold; cursor: pointer; transition: background-color 0.1s; }
        .btn-delete-score:hover { background: #c53030; }

        .quiz-actions-row { display: flex; flex-direction: column; gap: 10px; align-items: center; justify-content: center; }
        .btn-restart-quiz { background: none; border: 1px solid var(--green); color: var(--green); padding: 8px 16px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; cursor: pointer; transition: background-color 0.1s, color 0.1s; display: inline-flex; align-items: center; gap: 4px; }
        .btn-restart-quiz:hover { background: var(--green); color: #0d1110; }

        /* Estilos del Ranking */
        .ranking-list { display: flex; flex-direction: column; gap: 8px; max-height: 280px; overflow-y: auto; padding-right: 4px; }
        .ranking-item { display: flex; justify-content: space-between; align-items: center; background: #1c2824; padding: 10px 14px; border-radius: 8px; border-left: 3px solid var(--gold); }
        .ranking-item.top-score { border-left-color: var(--green); background: rgba(46, 189, 133, 0.05); }
        .ranking-name { font-size: 0.9rem; color: #fff; font-weight: 600; }
        .ranking-points { font-size: 0.85rem; color: var(--gold); font-weight: bold; }
        .ranking-empty { text-align: center; color: var(--text-dim); font-size: 0.85rem; font-style: italic; padding: 20px 0; }
        
        /* ESTILOS DEL FORMULARIO DE MENSAJES Y COMENTARIOS GUARDADOS */
        .message-form-container {
            padding: 15px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .message-field-wrapper {
            position: relative;
            width: 100%;
        }
        .message-input-custom {
            width: 100%;
            padding: 14px 45px 14px 16px;
            background: #0d1412;
            border: 1px solid rgba(45, 66, 59, 0.8);
            border-radius: 12px;
            color: #ffffff;
            font-size: 0.95rem;
            outline: none;
            text-align: left;
            transition: border-color 0.15s ease;
        }
        .message-input-custom:focus {
            border-color: var(--green);
        }
        .message-textarea-custom {
            width: 100%;
            height: 90px;
            padding: 14px 45px 14px 16px;
            background: #0d1412;
            border: 1px solid rgba(45, 66, 59, 0.8);
            border-radius: 12px;
            color: #ffffff;
            font-size: 0.95rem;
            outline: none;
            resize: none;
            text-align: left;
            transition: border-color 0.15s ease;
        }
        .message-textarea-custom:focus {
            border-color: var(--green);
        }
        .field-icon-emoji {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.1rem;
            pointer-events: none;
        }
        .message-textarea-custom + .field-icon-emoji {
            top: 24px;
            transform: none;
        }
        .btn-send-message-custom {
            width: 100%;
            padding: 14px;
            background: var(--green);
            color: #050a08;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background-color 0.1s ease, transform 0.08s ease;
        }
        .btn-send-message-custom:hover {
            background: var(--green-dim);
        }
        .btn-send-message-custom:active {
            transform: scale(0.98);
        }
        .first-message-notice {
            font-size: 0.9rem;
            color: var(--text-dim);
            margin-top: 15px;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }
        .messages-list-container {
            margin-top: 15px;
            max-height: 250px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding-right: 4px;
            border-top: 1px dashed rgba(45, 66, 59, 0.5);
            padding-top: 15px;
        }
        .message-item-box {
            background: #1c2824;
            padding: 12px;
            border-radius: 8px;
            border-left: 3px solid var(--green);
            text-align: left;
        }
        .message-item-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 6px;
        }
        .message-item-author {
            font-size: 0.85rem;
            font-weight: bold;
            color: var(--gold);
        }
        .message-item-date {
            font-size: 0.7rem;
            color: var(--text-dim);
        }
        .message-item-text {
            font-size: 0.85rem;
            color: #fff;
            line-height: 1.4;
            word-break: break-word;
        }

        .btn-celebrate {
            display: block; width: 100%; padding: 15px; background: linear-gradient(135deg, #c5a059 0%, #a07a2a 100%);
            color: #0d1110; border: none; border-radius: 50px; font-weight: 800; font-size: 0.9rem; font-family: 'DM Sans', sans-serif;
            text-transform: uppercase; letter-spacing: 1.5px; cursor: pointer; box-shadow: 0 6px 20px rgba(171,132,60,0.35);
            margin: 18px 0 10px 0; transition: transform 0.08s ease, box-shadow 0.08s ease; position: relative; overflow: hidden;
        }

        .btn-celebrate::before { content: ''; position: absolute; top: -50%; left: -60%; width: 40%; height: 200%; background: rgba(255,255,255,0.2); transform: skewX(-20deg); animation: shineSlide 3s ease-in-out infinite; }
        @keyframes shineSlide { 0%, 60% { left: -60%; } 100% { left: 130%; } }
        .btn-celebrate:hover { transform: translateY(-2px); box-shadow: 0 10px 28px rgba(171,132,60,0.55); }
        .btn-celebrate:active { transform: scale(0.97); }

        .share-container { display: flex; justify-content: center; gap: 12px; margin-top: 10px; width: 100%; }
        .share-btn {
            background: #1c2824; border: 1px solid #2d3f39; color: #cbdad5; padding: 10px 14px; border-radius: 30px;
            font-size: 0.78rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;
            cursor: pointer; flex: 1; justify-content: center; transition: background-color 0.08s ease, color 0.08s ease, border-color 0.08s ease;
            touch-action: manipulation;
        }
        .share-btn:hover { background: #2ebd85; color: #0d1110; border-color: #2ebd85; }

        .easter-egg-toast { display: none; background: #2ebd85; color: #0d1110; padding: 12px; border-radius: 12px; font-size: 0.85rem; font-weight: bold; margin-top: 15px; }
        .toast-notification {
            position: fixed; bottom: 30px; left: 50%; transform: translateX(-50%) translateY(100px); background: #2ebd85; color: #0d1110;
            padding: 12px 24px; border-radius: 30px; font-size: 0.85rem; font-weight: bold; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            z-index: 9999; text-align: center; white-space: nowrap; pointer-events: none; max-width: 90%; transition: transform 0.15s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .toast-notification.show { transform: translateX(-50%) translateY(0); }
        .toast-notification.loop-toast { background: #131c19; color: #cbdad5; border: 1px solid #2ebd85; }
        .toast-notification.error-toast { background: #9b2c2c; color: #ffffff; border: 1px solid #e53e3e; }
    </style>
</head>
<body>
    <div class="particles-bg" id="particlesBg"></div>
	
    <audio id="birthday-song" preload="metadata">
        <source src="assets/sound/Cristina - La Guerrera Silenciosa (Flamenco v2).mp3" type="audio/mpeg">
    </audio>

    <div class="card-container">
        <div class="badge-birthday">
            🎂 ¡FELIZ CUMPLE CRISTINA, 26 PRIMAVERAS! 🎉
        </div>

        <div class="cover-wrapper" id="coverWrapper">
            <img class="cover-art" id="coverImage" src="assets/imagen/81d076ef-d4e9-4bd9-b7d0-011a0ecbc4f8-Photo-Grid_11zon.webp" alt="Portada de la canción La Guerrera Silenciosa" width="418" height="418">
        </div>

        <div class="track-header-block">
            <h1 class="track-main-title">La Guerrera Silenciosa</h1>
            <div class="track-dedication-badge">
                <span>🩺</span> Dedicado a la niña buena del hospital
            </div>
            <div class="track-meta-subtitle">
                Homenaje Especial <span class="separator">•</span> Flamenco Urbano v2
            </div>
        </div>

        <div class="dedication-box">
            <h2>💌 De tus amigos con todo el corazón:</h2>
            <p>"A la que cura con abrazos y nunca deja a nadie atrás. Que sigas brillando e inundando el hospital y nuestras vidas con tu magia. ¡Te queremos un mundo, Cris!"</p>
			<div class="signature-list">Con amor: Carles, Uri, Alex, Jose, Javi, Johan, Berni, Pablo, Sandra, Ana, Deya ❤️</div>
        </div>

        <div class="custom-player">
            <div class="player-controls">
                <button class="nav-btn" id="restartBtn" title="Volver al principio" aria-label="Volver al principio de la canción">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6h2v12H6V6zm11.5 12l-8.5-6 8.5-6v12z"/></svg>
                </button>
                <button class="nav-btn" id="rewindBtn" title="Retroceder 10 segundos" aria-label="Retroceder 10 segundos">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M11 18V6l-8.5 6 8.5 6zm.5-6l8.5 6V6l-8.5 6z"/></svg>
                </button>
                <button class="play-btn" id="customPlayBtn" title="Reproducir" aria-label="Reproducir canción">
                    <svg class="play-icon-svg" id="playIcon" viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
                    <svg class="pause-icon-svg" id="pauseIcon" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                </button>
                <button class="nav-btn" id="forwardBtn" title="Adelantar 10 segundos" aria-label="Adelantar 10 segundos">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 18l8.5-6L4 6v12zm9-12v12l8.5-6L13 6z"/></svg>
                </button>
                <button class="nav-btn" id="loopBtn" title="Bucle: Desactivado" aria-label="Cambiar modo de repetición">
                    <svg viewBox="0 0 24 24" id="loopSvg" aria-hidden="true"><g id="loopGraphicsContainer"></g></svg>
                </button>
            </div>
            
            <div class="progress-container">
                <span class="time-label" id="currentTime">0:00</span>
                <div class="progress-bar-wrapper">
                    <div class="progress-buffer" id="progressBuffer"></div>
                    <div class="progress-fill" id="progressFill"></div>
                    <input type="range" class="progress-slider" id="progressSlider" min="0" max="100" value="0" aria-label="Progreso de la reproducción">
                </div>
                <span class="time-label" id="totalDuration">0:00</span>
            </div>

            <div class="player-tools-row">
                <div class="volume-container">
                    <button class="volume-btn" id="volumeBtn" aria-label="Silenciar o activar sonido">🔊</button>
                    <div class="volume-slider-wrapper">
                        <input type="range" class="volume-slider" id="volumeSlider" min="0" max="1" step="0.01" value="1" aria-label="Control de volumen">
                    </div>
                    <span class="volume-percentage" id="volumePercentage">100%</span>
                </div>
                <div class="speed-select-container">
                    <select class="speed-select" id="speedSelect" aria-label="Velocidad de reproducción">
                        <option value="0.5">0.5x</option><option value="0.75">0.75x</option><option value="1" selected>Normal</option><option value="1.25">1.25x</option><option value="1.5">1.5x</option><option value="2">2x</option>
                    </select>
                </div>
            </div>

            <div class="download-wrapper">
                <a href="assets/sound/Cristina - La Guerrera Silenciosa (Flamenco v2).mp3" download="Cristina - La Guerrera Silenciosa.mp3" class="download-action-btn">
                    📥 Descargar Archivo Oficial (Audio HQ)
                </a>
            </div>
        </div>

        <div class="accordion-container">
            <button class="btn-accordion" onclick="toggleAccordion('infoContent')"><span>📊</span> Ver detalles de la canción</button>
            <div class="accordion-content" id="infoContent">
                <div class="track-info-extended">
                       <div class="track-info-section-title">🎵 Atributos del Single</div>
                        <div class="track-info-row"><span>Título Oficial:</span><span>La Guerrera Silenciosa</span></div>
                        <div class="track-info-row"><span>Versión / Edición:</span><span>Flamenco Urbano Mix (v2)</span></div>
                        <div class="track-info-row"><span>Homenajeada:</span><span>Dra. Cristina</span></div>
						<div class="track-info-row"><span>Álbum:</span><span>Las 26 Primaveras (Single)</span></div>
						<div class="track-info-row"><span>Fecha de Lanzamiento:</span><span>Mayo 2026</span></div>
                        <div class="track-info-row"><span>Duración Total:</span><span>03:10 (Aprox.)</span></div>
						<div class="track-info-row"><span>Calidad del Archivo:</span><span>MP3 High Quality (322kbps)</span></div>
						<div class="track-info-row"><span>Licencia:</span><span>Uso Personal / Amistad Eterna ❤️</span></div>
                        <div class="track-info-section-title">🎛️ Producción e Ingeniería</div>
                        <div class="track-info-row"><span>Composición y Letra:</span><span>Tus Amigos de Siempre</span></div>
                        <div class="track-info-row"><span>Motor de Síntesis Vocal:</span><span>IA Generativa Avanzada</span></div>
                        <div class="track-info-row"><span>Arreglos Instrumentales:</span><span>Guitarras Flamencas, Cajón Sincopado y Palmas</span></div>
                        <div class="track-info-row"><span>Mezcla y Masterización:</span><span>Capibara Sound Studio (Digital Stereo)</span></div>
						<div class="track-info-section-title">📜 Notas de los Creadores</div>
                        <div class="track-info-row" style="flex-direction:column;align-items:flex-start;gap:4px;">
                            <span style="color:var(--text-body);font-style:italic;font-weight:normal;text-align:left;">
                                "Esta pieza fue diseñada combinando el compás tradicional andaluz con arreglos modernos de base urbana. El objetivo era reflejar la dualidad de Cris: su incansable dedicación en el sector hospitalario frente a su espíritu alegre y fiestero cuando está rodeada de la gente que la quiere."
                            </span>
                        </div>
                </div>
            </div>
        </div>

        <div class="accordion-container">
            <button class="btn-accordion" onclick="toggleAccordion('lyricsContent')">
                <span>🎵</span> Ver la letra completa
            </button>
            <div class="accordion-content" id="lyricsContent">
				<div class="lyrics-text">
                    <div class="lyrics-tag">[Intro]</div>
					<div class="lyrics-line"><i>[Inicio Instrumental - Solo de Guitarra]</i></div>
                    <div class="lyrics-line">¡Yeah-eh!</div>
                    <div class="lyrics-line">Pa’ la niña del hospital</div>
                    <div class="lyrics-line">La que nunca deja a nadie atrás</div>
                    <div class="lyrics-line">Cristina… 26 ya</div>
                    <div class="lyrics-line">Dale palmas, ¡eh!</div>
					
					<div class="lyrics-line"><i>[Ritmo Flamenco]</i></div>

                    <div class="lyrics-tag">[Verso 1]</div>
                    <div class="lyrics-line">Sale temprano aunque no haya dormío’</div>
                    <div class="lyrics-line">Siempre cuidando corazones partíos’</div>
                    <div class="lyrics-line">Tiene ojeras pero nunca se rinde</div>
                    <div class="lyrics-line">Mientras otros hablan, ella siempre asiste</div>
                    <div class="lyrics-line">Va con la bata y con arte en la mirada</div>
                    <div class="lyrics-line">Media vida arreglando madrugadas</div>
                    <div class="lyrics-line">Y aunque el mundo a veces pese demasiado</div>
                    <div class="lyrics-line">Ella sigue dando luz sin pedir nada a cambio</div>

                    <div class="lyrics-line" style="margin-top: 12px;">Y dime quién</div>
                    <div class="lyrics-line">Se queda cuando todo va mal</div>
                    <div class="lyrics-line">Quién abraza aunque ella esté fatal</div>
                    <div class="lyrics-line">Quién sonríe pa’ que otro pueda aguantar</div>
                    <div class="lyrics-line">Cristina lo hace natural</div>

                    <div class="lyrics-tag">[Pre-Coro]</div>
                    <div class="lyrics-line">Y aunque el tiempo vaya rápido</div>
                    <div class="lyrics-line">Tú sigues brillando igual</div>
                    <div class="lyrics-line">26 vueltas al mundo</div>
                    <div class="lyrics-line">Y todavía te queda magia pa’ regalar</div>

                    <div class="lyrics-tag">[Estribillo]</div>
                    <div class="lyrics-line">Que suenen palmas por Cristina</div>
                    <div class="lyrics-line">La niña buena del hospital</div>
                    <div class="lyrics-line">La que cura con abrazos</div>
                    <div class="lyrics-line">Y tiene un corazón que no se puede explicar</div>
                    <div class="lyrics-line">26 primaveras</div>
                    <div class="lyrics-line">Y sigue siendo especial</div>
                    <div class="lyrics-line">Tiene fuerza pa’ salvarte</div>
                    <div class="lyrics-line">Y locura pa’ ponerse a bailar</div>
                    <div class="lyrics-line">¡Eh-eh!</div>
                    <div class="lyrics-line">Cristina no cambia</div>
                    <div class="lyrics-line">Aunque la vida le apriete el compás</div>
                    <div class="lyrics-line">¡Eh-eh!</div>
                    <div class="lyrics-line">Siempre pa’lante</div>
                    <div class="lyrics-line">Con el alma llena de verdad</div>
					
					<div class="lyrics-line"><i>[Interludio Instrumental - Percusión]</i></div>
					
                    <div class="lyrics-tag">[Verso 2]</div>
                    <div class="lyrics-line">Le gusta ayudar aunque nadie lo vea</div>
                    <div class="lyrics-line">Nunca presume de todo lo que pelea</div>
                    <div class="lyrics-line">Tiene algo puro difícil de encontrar</div>
                    <div class="lyrics-line">De esas personas que te arreglan el día sin hablar</div>

                    <div class="lyrics-line" style="margin-top: 12px;">Y mírala</div>
                    <div class="lyrics-line">Riéndose fuerte con sus amigas</div>
                    <div class="lyrics-line">Aunque por dentro lleve mil movidas</div>
                    <div class="lyrics-line">Pero ella nunca deja caer a los suyos</div>
                    <div class="lyrics-line">Por eso el mundo se le queda pequeño</div>
                    <div class="lyrics-line">Tiene duende, tiene calma</div>
                    <div class="lyrics-line">Tiene fuego dentro del alma</div>
                    <div class="lyrics-line">Y aunque a veces dude de sí misma</div>
                    <div class="lyrics-line">Vale más de lo que imagina</div>

                    <div class="lyrics-tag">[Puente Flamenco]</div>
                    <div class="lyrics-line">Ay Cristina...</div>
                    <div class="lyrics-line">Que la vida te devuelva</div>
                    <div class="lyrics-line">To’ lo bueno que has dejao’</div>
                    <div class="lyrics-line">En cada planta y cada puerta</div>
                    <div class="lyrics-line">Donde alguien te necesitó</div>
                    <div class="lyrics-line">Porque hay personas que trabajan</div>
                    <div class="lyrics-line">Y otras que dejan huella</div>
                    <div class="lyrics-line">Y tú naciste pa’ lo segundo</div>
                    <div class="lyrics-line">Aunque no te des cueeeeenta... de ella...</div>

                    <div class="lyrics-tag">[Último Estribillo]</div>
                    <div class="lyrics-line">Que suenen palmas por Cristina</div>
                    <div class="lyrics-line">Hoy nadie la puede parar</div>
                    <div class="lyrics-line">26 y más bonita</div>
                    <div class="lyrics-line">Con esa forma suya de cuidar</div>
                    <div class="lyrics-line">Que baile toda la noche</div>
                    <div class="lyrics-line">Que hoy le toca celebrar</div>
                    <div class="lyrics-line">La que salva corazones</div>
                    <div class="lyrics-line">También merece felicidad</div>
                    <div class="lyrics-line">¡Eh-eh!</div>
                    <div class="lyrics-line">Cristina sonríe</div>
                    <div class="lyrics-line">Que hoy el mundo canta pa’ ti</div>
                    <div class="lyrics-line">¡Eh-eh!</div>
                    <div class="lyrics-line">Brindo esta noche</div>
                    <div class="lyrics-line">Por todo lo que haces sin pedi-i-i-ir...</div>

					<div class="lyrics-line"><i>[Cierre Instrumental - Guitarra Suave]</i></div>

                    <div class="lyrics-tag">[Outro]</div>
                    <div class="lyrics-line">Pa’ Cristina</div>
                    <div class="lyrics-line">La guerrera silenciosa</div>
                    <div class="lyrics-line">26 años</div>
                    <div class="lyrics-line" style="color: #e5c07b;">Y lo mejor todavía no ha empezao’…</div>
                </div>
            </div>
        </div>
		
        <div class="accordion-container">
            <button class="btn-accordion" onclick="toggleQuizAccordion()"><span>🕹️</span> Jugar al Trivia de Cris</button>
            <div class="accordion-content" id="quizContent">
                <div class="quiz-tabs">
                    <button class="quiz-tab-btn active" id="tabBtnPlay" onclick="switchQuizTab('play')">🎮 Jugar</button>
                    <button class="quiz-tab-btn" id="tabBtnRanking" onclick="switchQuizTab('ranking')">🏆 Ranking</button>
                </div>
                
                <div class="quiz-tab-content active" id="tabContentPlay">
                    <div class="quiz-card" id="quizBox"></div>
                </div>
                
                <div class="quiz-tab-content" id="tabContentRanking">
                    <div class="quiz-card">
                        <div class="ranking-list" id="rankingListContainer"></div>
                    </div>
                </div>
            </div>
        </div>

<div class="accordion-container">
            <button class="btn-accordion" onclick="toggleMessagesAccordion()"><span>💌</span> Dejar un mensaje a Cristina</button>
            <div class="accordion-content" id="messagesContent">
                <!-- Pestañas idénticas a la Trivia -->
                <div class="quiz-tabs">
                    <button class="quiz-tab-btn active" id="tabBtnWriteMsg" onclick="switchMessagesTab('write')">✍️ Escribir</button>
                    <button class="quiz-tab-btn" id="tabBtnListMsg" onclick="switchMessagesTab('list')">📜 Mensajes Recibidos</button>
                </div>
                
                <!-- Pestaña 1: Formulario para escribir mensaje -->
                <div class="quiz-tab-content active" id="tabContentWriteMsg">
                    <div class="message-form-container" style="padding-top: 10px;">
                        <div class="message-field-wrapper">
                            <input type="text" id="msgNameInput" class="message-input-custom" placeholder="Tu nombre" maxlength="50">
                            <span class="field-icon-emoji">👤</span>
                        </div>
                        <div class="message-field-wrapper" style="margin-top: 12px;">
                            <textarea id="msgTextInput" class="message-textarea-custom" placeholder="Escríbele un mensaje a Cristina..." maxlength="1000"></textarea>
                            <span class="field-icon-emoji">💌</span>
                        </div>
                        <button class="btn-send-message-custom" style="margin-top: 12px;" onclick="submitMessageToCris()">Enviar mensaje 🚀</button>
                    </div>
                </div>
                
                <!-- Pestaña 2: Lista de mensajes recibidos -->
                <div class="quiz-tab-content" id="tabContentListMsg">
                    <div class="message-form-container" style="padding: 10px 0 0 0;">
                        <div class="messages-list-container" id="messagesListContainer" style="border-top: none; padding-top: 0; max-height: 280px;">
                            <div class="first-message-notice">Cargando dedicatorias...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <button class="btn-celebrate" onclick="launchConfetti()">¡Felicitar a lo grande! 🥳</button>

        <div class="easter-egg-toast" id="easterEgg">🎁 ¡Fin del tema! Ahora ve corriendo y dale un abrazo gigante a la cumpleañera ❤️</div>
    </div>

    <div class="toast-notification" id="toastNotification">Enlace copiado al portapapeles 📋</div>

    <script>
        const currentUrl = window.location.protocol === 'file:' ? 'https://capibarasound00.42web.io/cristina26/' : window.location.href;
        
        const ogUrlMeta = document.querySelector('meta[property="og:url"]');
        if (ogUrlMeta) {
            ogUrlMeta.setAttribute('content', currentUrl);
        } else {
            const newMeta = document.createElement('meta');
            newMeta.setAttribute('property', 'og:url');
            newMeta.setAttribute('content', currentUrl);
            document.head.appendChild(newMeta);
        }

        /* ======= PARTICLES ======= */
        (function createParticles() {
            const container = document.getElementById('particlesBg');
            const colors = ['#2ebd85', '#e5c07b', '#c5a059', '#40dd9f', '#ffffff'];
            for (let i = 0; i < 15; i++) {
                const p = document.createElement('div'); p.className = 'particle';
                const size = Math.random() * 5 + 2;
                p.style.cssText = `width:${size}px; height:${size}px; left:${Math.random() * 100}%; background:${colors[Math.floor(Math.random()*colors.length)]}; animation-duration:${Math.random() * 14 + 10}s; animation-delay:${Math.random() * 6}s; opacity:0;`;
                container.appendChild(p);
            }
        })();
	
        const audio = document.getElementById('birthday-song');
        const playBtn = document.getElementById('customPlayBtn');
        const playIcon = document.getElementById('playIcon');
        const pauseIcon = document.getElementById('pauseIcon');
        const progressFill = document.getElementById('progressFill');
        const progressBuffer = document.getElementById('progressBuffer');
        const progressSlider = document.getElementById('progressSlider');
        const currentTimeLabel = document.getElementById('currentTime');
        const totalDurationLabel = document.getElementById('totalDuration');
        const audioStatusContainer = document.getElementById('audioStatusContainer');
        const audioSpinner = document.getElementById('audioSpinner');
        const audioCheckIcon = document.getElementById('audioCheckIcon');

        const restartBtn = document.getElementById('restartBtn');
        const loopBtn = document.getElementById('loopBtn');
        const loopGraphicsContainer = document.getElementById('loopGraphicsContainer');
        const rewindBtn = document.getElementById('rewindBtn');
        const forwardBtn = document.getElementById('forwardBtn');
        const volumeBtn = document.getElementById('volumeBtn');
        const volumeSlider = document.getElementById('volumeSlider');
        const volumePercentage = document.getElementById('volumePercentage');
        const speedSelect = document.getElementById('speedSelect');
        const toastNotification = document.getElementById('toastNotification');
        const easterEgg = document.getElementById('easterEgg');
        const coverImage = document.getElementById('coverImage');
        const coverWrapper = document.getElementById('coverWrapper');

        let lastVolume = 1.0; let isSeeking = false; let loopState = 0; let hasRepeatedOnce = false;

        function renderLoopIcon(state) {
            // Definimos los colores según el estado: 0 = gris/blanco, 1 = amarillo, 2 = verde
            let iconColor = "#a2b5ae"; // Estado 0 (Por defecto)
            if (state === 1) iconColor = "#e5c07b"; // Estado 1 (Amarillo)
            if (state === 2) iconColor = "#2ebd85"; // Estado 2 (Verde)

            // El icono base de las flechas ahora adopta el color activo dinámicamente
            let basePaths = `<g transform="scale(0.85)" transform-origin="12 12"><path d="M7 7h10v3l4-4-4-4v3H5v6h2V7zm10 10H7v-3l-4 4 4 4v-3h12v-6h-2v4z" fill="${iconColor}"/></g>`;

            if (state === 0) return basePaths;

            // Estado 1: Círculo y número "1" más grandes
            if (state === 1) {
                return basePaths + `
                    <circle cx="18" cy="18" r="6" fill="#e5c07b" />
                    <text x="18" y="21" font-family="sans-serif" font-size="9" font-weight="900" fill="#0d1110" text-anchor="middle">1</text>
                `;
            }

            // Estado 2: Círculo y símbolo "∞" más grandes
            if (state === 2) {
                return basePaths + `
                    <circle cx="18" cy="18" r="6" fill="#2ebd85" />
                    <text x="18" y="21.5" font-family="sans-serif" font-size="11" font-weight="900" fill="#0d1110" text-anchor="middle">∞</text>
                `;
            }
        }

        // LÍNEA CORREGIDA: Fuerza al contenedor SVG a dibujar el icono base nada más cargar la web
        loopGraphicsContainer.innerHTML = renderLoopIcon(0);

        audio.volume = 1.0;
        function setCoverAsLoaded() { coverImage.classList.add('loaded'); coverWrapper.classList.add('image-is-loaded'); }
        if (coverImage.complete) setCoverAsLoaded(); else coverImage.addEventListener('load', setCoverAsLoaded);
                                         
        function showToast(text, isLoopMsg = false, isError = false) {
            toastNotification.textContent = text;
            if (isError) { toastNotification.className = "toast-notification show error-toast"; }
            else if (isLoopMsg) { toastNotification.className = "toast-notification show loop-toast"; }
            else { toastNotification.className = "toast-notification show"; }
            setTimeout(() => { toastNotification.classList.remove('show'); }, 2000);
        }

        function togglePlayAudio(forceState = null) {
            const shouldPlay = forceState !== null ? forceState : audio.paused;
            if (shouldPlay) { audio.play(); playIcon.style.display = 'none'; pauseIcon.style.display = 'block'; } 
            else { audio.pause(); playIcon.style.display = 'block'; pauseIcon.style.display = 'none'; }
        }
        playBtn.addEventListener('click', () => togglePlayAudio());
        restartBtn.addEventListener('click', () => { audio.currentTime = 0; togglePlayAudio(true); if(easterEgg.style.display==='block') easterEgg.style.display='none'; });
        
        loopBtn.addEventListener('click', () => {
            loopState = (loopState + 1) % 3;
            if (loopState === 0) { audio.loop = false; loopGraphicsContainer.innerHTML = renderLoopIcon(0); showToast('🔀 Bucle desactivado', true); } 
            else if (loopState === 1) { audio.loop = false; hasRepeatedOnce = false; loopGraphicsContainer.innerHTML = renderLoopIcon(1); showToast('🔂 Se repetirá solo una vez', true); } 
            else if (loopState === 2) { audio.loop = true; loopGraphicsContainer.innerHTML = renderLoopIcon(2); showToast('🔁 Repetición infinita activada', true); }
        });

        rewindBtn.addEventListener('click', () => audio.currentTime = Math.max(0, audio.currentTime - 10));
        forwardBtn.addEventListener('click', () => audio.currentTime = Math.min(audio.duration, audio.currentTime + 10));
        audio.addEventListener('timeupdate', () => { if (audio.duration && !isSeeking) { const percent = (audio.currentTime / audio.duration) * 100; progressSlider.value = percent; progressFill.style.width = `${percent}%`; currentTimeLabel.textContent = formatTime(audio.currentTime); } });
        progressSlider.addEventListener('input', (e) => { isSeeking = true; progressFill.style.width = `${e.target.value}%`; currentTimeLabel.textContent = formatTime((e.target.value / 100) * audio.duration); });
        progressSlider.addEventListener('change', (e) => { audio.currentTime = (e.target.value / 100) * audio.duration; isSeeking = false; });
        audio.addEventListener('loadedmetadata', () => totalDurationLabel.textContent = formatTime(audio.duration));

        function updateVolumeSliderBackground(value) { const percentage = value * 100; volumeSlider.style.background = `linear-gradient(to right, #2ebd85 0%, #2ebd85 ${percentage}%, #1e2d29 ${percentage}%, #1e2d29 100%)`; volumePercentage.textContent = `${Math.round(percentage)}%`; }
        volumeSlider.addEventListener('input', (e) => { audio.volume = parseFloat(e.target.value); updateVolumeSliderBackground(audio.volume); });
        speedSelect.addEventListener('change', (e) => { audio.playbackRate = parseFloat(e.target.value); });
        function formatTime(seconds) { if (isNaN(seconds)) return "0:00"; const mins = Math.floor(seconds / 60); const secs = Math.floor(seconds % 60); return `${mins}:${secs < 10 ? '0' : ''}${secs}`; }
        function launchConfetti() { if (typeof confetti === 'function') { confetti({ particleCount: 30, spread: 40, origin: { x: 0.2, y: 0.85 } }); confetti({ particleCount: 30, spread: 40, origin: { x: 0.8, y: 0.85 } }); } }
        
        function toggleAccordion(id) { 
            const content = document.getElementById(id); 
            if (content.style.maxHeight && content.style.maxHeight !== "0px") { 
                content.style.maxHeight = "0px"; 
                content.style.opacity = "0"; 
            } else { 
                content.style.maxHeight = content.scrollHeight + "px"; 
                content.style.opacity = "1"; 
            } 
        }

        audio.addEventListener('ended', () => { if (loopState === 1 && !hasRepeatedOnce) { hasRepeatedOnce = true; audio.currentTime = 0; audio.play(); } else if (loopState === 0) { playIcon.style.display = 'block'; pauseIcon.style.display = 'none'; easterEgg.style.display = 'block'; launchConfetti(); } });

        /* ======= TRIVIA ======= */
        const quizDataOriginal = [
            { q: "¿Cuántos años cumple hoy Cristina?", o: ["25 años", "26 años", "27 años"], a: 1 },
            { q: "¿Dónde reparte su magia y cura con abrazos?", o: ["En el hospital", "En el gimnasio", "En la playa"], a: 0 },
            { q: "¿Cómo se llama el single oficial lanzado hoy?", o: ["La Fiestera", "Flamenco Urbano", "La Guerrera Silenciosa"], a: 2 },
			{ q: "Si Cris tuviera que diagnosticar el estado del grupo de amigos un sábado por la noche, ¿cuál sería su veredicto definitivo?", o: ["Delirio agudo por falta de fiesta", "Arritmia por reggaetón", "Coma inducido por exceso de risas"], a: 2 },
            { q: "Empieza a sonar el estribillo de su canción oficial a mitad de la noche, ¿cuál es la reacción inmediata de Cris?", o: ["Dar palmas y venirse arriba", "Ponerse roja de la vergüenza y esconderse", "Pasar olímpicamente"], a: 1 },
            { q: "En el hospital para sobrevivir a la jornada, ¿qué es lo primero que necesita Cristina?", o: ["Buscar un amuleto secreto en su bata", "Poner música fiestera en la sala de médicos", "Tomarse un buen café y quejarse del sueño"], a: 2 },
            { q: "En el vademécum personal de Cristina, ¿cuál es el tratamiento recomendado para un bajón de energía de sus amigos?", o: ["Una infusión de manzanilla y a la cama", "Un buen abrazo, palmas flamencas y un par de copas", "Reposo absoluto en silencio"], a: 1 },
            { q: "¿Cuál es el superpoder secreto que usa Cris en las guardias interminables del hospital?", o: ["Café intravenoso", "Su arte innata y una sonrisa que resucita a cualquiera", "Escabullirse a dormir en los almacenes"], a: 1 }
        ];

        let serializedQuizQuestions = []; let currentQuizIndex = 0; let correctAnswersCount = 0; let isAnsweringBlock = false; let currentUserName = "";
        let deleteTimeoutId = null; let activeDeleteTimerInterval = null;

		function toggleQuizAccordion() {
            const content = document.getElementById('quizContent');
            if (content.style.maxHeight && content.style.maxHeight !== "0px") { content.style.maxHeight = "0px"; content.style.opacity = "0"; } 
            else { if (currentQuizIndex === 0 && !currentUserName) { renderNameFormState(); } else if (currentQuizIndex >= serializedQuizQuestions.length && currentUserName) { /* En pantalla de resultados finalizados */ } else { renderCurrentQuizState(); } renderRankingList(); content.style.maxHeight = content.scrollHeight + "px"; content.style.opacity = "1"; }
        }

        function switchQuizTab(tab) {
            const tabPlay = document.getElementById('tabBtnPlay'); const tabRanking = document.getElementById('tabBtnRanking');
            const contentPlay = document.getElementById('tabContentPlay'); const contentRanking = document.getElementById('tabContentRanking');
            if (tab === 'play') { tabPlay.classList.add('active'); tabRanking.classList.remove('active'); contentPlay.classList.add('active'); contentRanking.classList.remove('active'); } 
            else { tabPlay.classList.remove('active'); tabRanking.classList.add('active'); contentPlay.classList.remove('active'); contentRanking.classList.add('active'); renderRankingList(); }
            document.getElementById('quizContent').style.maxHeight = document.getElementById('quizContent').scrollHeight + "px";
        }

        function renderNameFormState() {
            document.getElementById('quizBox').innerHTML = `
                <div class="quiz-start-form">
                    <p>Introduce tu nombre para empezar el juego de orden aleatorio:</p>
                    <input type="text" id="quizUserNameInput" class="quiz-input-name" placeholder="Tu nombre..." maxlength="20">
                    <button class="btn-start-game" onclick="submitNameAndStart()">Empezar Trivia 🚀</button>
                </div>`;
        }

        function shuffleArray(array) { for (let i = array.length - 1; i > 0; i--) { const j = Math.floor(Math.random() * (i + 1)); [array[i], array[j]] = [array[j], array[i]]; } return array; }

        function adjustQuizAccordionHeight() {
            const content = document.getElementById('quizContent');
            if(content.style.maxHeight && content.style.maxHeight !== "0px") {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        }

        function prepareShuffledQuiz() {
            let pool = JSON.parse(JSON.stringify(quizDataOriginal)); shuffleArray(pool);
            pool.forEach(item => { let textCorrectAnswer = item.o[item.a]; shuffleArray(item.o); item.a = item.o.indexOf(textCorrectAnswer); });
            serializedQuizQuestions = pool;
        }

        function submitNameAndStart() {
            const name = document.getElementById('quizUserNameInput').value.trim();
            if (!name) { showToast("Por favor, introduce un nombre", false, true); return; }
            currentUserName = name; prepareShuffledQuiz(); renderCurrentQuizState();
            adjustQuizAccordionHeight();
        }

        function resetQuizGame() {
            clearTimeout(deleteTimeoutId); clearInterval(activeDeleteTimerInterval);
            currentQuizIndex = 0; correctAnswersCount = 0; isAnsweringBlock = false; currentUserName = ""; serializedQuizQuestions = [];
            renderNameFormState(); adjustQuizAccordionHeight();
        }

        function renderCurrentQuizState() {
            const box = document.getElementById('quizBox');
            if (currentQuizIndex >= serializedQuizQuestions.length) {
                saveScoreToRanking(currentUserName, correctAnswersCount);
                
                let secondsLeft = 120;
                box.innerHTML = `
                    <div class="quiz-results-box">
                        <div class="results-trophy">👑</div>
                        <div class="results-score-title">¡Trivia Finalizado!</div>
                        <div class="results-score-text">${correctAnswersCount} / ${serializedQuizQuestions.length} Aciertos</div>
                        <div class="results-commentary"><b>${currentUserName}</b>: ¡Tu puntuación ha sido añadida a la pestaña del Ranking!</div>
                        
                        <div class="delete-window-box" id="deleteWindowBox">
                            <p>@Te has equivocado de nombre o quieres repetir? Tienes <b><span id="deleteTimerLabel">2:00</span></b> para borrarte del ranking:</p>
                            <button class="btn-delete-score" onclick="deleteRecentScoreFromGame()">🗑️ Borrar mi puntuación ahora</button>
                        </div>

                        <div class="quiz-actions-row">
                            <button class="btn-restart-quiz" onclick="resetQuizGame()">🔄 Jugar otra partida (Nuevo usuario)</button>
                        </div>
                    </div>`;
                
                launchConfetti();

                clearInterval(activeDeleteTimerInterval);
                activeDeleteTimerInterval = setInterval(() => {
                    secondsLeft--;
                    if (secondsLeft <= 0) {
                        clearInterval(activeDeleteTimerInterval);
                        const element = document.getElementById('deleteWindowBox');
                        if (element) element.style.display = 'none';
                    } else {
                        const mins = Math.floor(secondsLeft / 60);
                        const secs = secondsLeft % 60;
                        const label = document.getElementById('deleteTimerLabel');
                        if (label) label.textContent = `${mins}:${secs < 10 ? '0' : ''}${secs}`;
                    }
                }, 1000);
                return;
            }

            const data = serializedQuizQuestions[currentQuizIndex];
            box.innerHTML = `
                <div class="quiz-header">
                    <span class="quiz-progress">Pregunta ${currentQuizIndex + 1} de ${serializedQuizQuestions.length}</span>
                    <span class="quiz-score-badge">Puntos: ${correctAnswersCount}</span>
                </div>
                <div class="quiz-q">${data.q}</div><div class="quiz-options" id="quizOptions"></div>`;

            const optionsContainer = document.getElementById('quizOptions');
            data.o.forEach((opt, idx) => {
                const btn = document.createElement('button'); btn.className = 'quiz-opt'; btn.textContent = opt;
                btn.addEventListener('click', () => handleOptionSelection(idx, btn)); optionsContainer.appendChild(btn);
            });
        }

        function handleOptionSelection(selectedIdx, clickedButton) {
            if (isAnsweringBlock) return; isAnsweringBlock = true;
            const currentQuestionData = serializedQuizQuestions[currentQuizIndex];
            const allOptions = document.querySelectorAll('.quiz-opt');
            allOptions.forEach(b => b.style.pointerEvents = 'none');

            if (selectedIdx === currentQuestionData.a) { clickedButton.classList.add('correct-flash'); correctAnswersCount++; } 
            else { clickedButton.classList.add('wrong-flash'); allOptions[currentQuestionData.a].classList.add('correct-flash'); }

            currentQuizIndex++;
            setTimeout(() => { renderCurrentQuizState(); adjustQuizAccordionHeight(); isAnsweringBlock = false; }, 600);
        }

        /* ======= RANKING SERVER ======= */
        function saveScoreToRanking(name, score) {
            fetch('api.php?action=save_score', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ nombre: name, puntuacion: score })
            })
            .then(res => res.json())
            .then(() => renderRankingList());
        }

        function deleteRecentScoreFromGame() {
            if (!currentUserName) return;
            fetch('api.php?action=delete_recent', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ nombre: currentUserName })
            })
            .then(res => res.json())
            .then(() => {
                clearInterval(activeDeleteTimerInterval);
                showToast("🗑️ Tu puntuación ha sido eliminada.");
                resetQuizGame();
                renderRankingList();
            });
        }

        function renderRankingList() {
            const container = document.getElementById('rankingListContainer');
            fetch('api.php?action=get_ranking')
            .then(res => res.json())
            .then(ranking => {
                if (!ranking || ranking.length === 0) {
                    container.innerHTML = `<div class="ranking-empty">Aún nadie ha respondido la encuesta. ¡Sé el primero en jugar! 🏆</div>`;
                    return;
                }
                
                let html = "";
                ranking.forEach((player, index) => {
                    let medal = index === 0 ? "🥇 " : index === 1 ? "🥈 " : index === 2 ? "🥉 " : `${index + 1}. `;
                    let isTop = index === 0 ? "top-score" : "";
                    html += `
                        <div class="ranking-item ${isTop}">
                            <span class="ranking-name">${medal}${player.nombre}</span>
                            <span class="ranking-points">${player.puntuacion} / ${quizDataOriginal.length} Pts</span>
                        </div>`;
                });
                container.innerHTML = html;
            });
        }

        /* ======= LÓGICA DE DEDICATORIAS CON BASE DE DATOS ======= */
        let mensajesCargados = []; // Aquí guardaremos los mensajes de la API
        let paginaActualMensajes = 1; // Página actual
        const mensajesPorPagina = 5; // Límite de mensajes por página

        function toggleMessagesAccordion() {
            const content = document.getElementById('messagesContent');
            if (content.style.maxHeight && content.style.maxHeight !== "0px") {
                content.style.maxHeight = "0px";
                content.style.opacity = "0";
            } else {
                // Al abrir el acordeón nos aseguramos de que empiece en la pestaña de escribir
                switchMessagesTab('write');
                content.style.opacity = "1";
            }
        }

        function switchMessagesTab(tab) {
            const tabWrite = document.getElementById('tabBtnWriteMsg'); 
            const tabList = document.getElementById('tabBtnListMsg');
            const contentWrite = document.getElementById('tabContentWriteMsg'); 
            const contentList = document.getElementById('tabContentListMsg');
            const content = document.getElementById('messagesContent');

            if (tab === 'write') { 
                tabWrite.classList.add('active'); 
                tabList.classList.remove('active'); 
                contentWrite.style.display = 'block';
                contentList.style.display = 'none';
            } else { 
                tabWrite.classList.remove('active'); 
                tabList.classList.add('active'); 
                contentWrite.style.display = 'none';
                contentList.style.display = 'block';
                
                // Cargamos los mensajes en tiempo real al cambiar a la pestaña de la lista
                loadCrisMessages(); 
            }

            // Forzamos que el acordeón se adapte dinámicamente al tamaño real de la pestaña activa
            setTimeout(() => {
                content.style.maxHeight = content.scrollHeight + "px";
            }, 50);
        }

        function submitMessageToCris() {
            const nameInput = document.getElementById('msgNameInput');
            const textInput = document.getElementById('msgTextInput');
            const name = nameInput.value.trim();
            const text = textInput.value.trim();
            
            if (!name || !text) {
                showToast("Por favor, rellena ambos campos", false, true);
                return;
            }
            
            fetch('api.php?action=save_message', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ nombre: name, mensaje: text })
            })
            .then(res => res.json())
            .then(data => {
                if (data.status === 'success') {
                    showToast("🚀 ¡Mensaje enviado con éxito!");
                    nameInput.value = "";
                    textInput.value = "";
                    launchConfetti();
                    
                    // En lugar de recargar de inmediato en el fondo, mandamos al usuario
                    // automáticamente a la pestaña de "Mensajes Recibidos" para que vea su post
                    switchMessagesTab('list');
                } else {
                    showToast(data.message || "Error al procesar el mensaje", false, true);
                }
            })
            .catch(() => {
                showToast("Error de conexión con el servidor", false, true);
            });
        }

        function loadCrisMessages() {
            const container = document.getElementById('messagesListContainer');

            fetch('api.php?action=get_messages')
            .then(res => res.json())
            .then(messages => {
                mensajesCargados = messages || [];

                if (mensajesCargados.length === 0) {
                    container.innerHTML = `
                        <div class="first-message-notice" id="fallbackNotice">
                            ¡Sé el primero en dejarle un mensaje! 💬
                        </div>`;

                    const content = document.getElementById('messagesContent');
                    if (content) content.style.maxHeight = content.scrollHeight + "px";
                    return;
                }

                // Cada vez que cargamos de cero, reiniciamos a la página 1
                paginaActualMensajes = 1;
                mostrarPaginaMensajes();
            })
            .catch(() => {
                container.innerHTML = `<div class="first-message-notice" style="color:var(--red-dim)">No se pudieron cargar los mensajes ⚠️</div>`;
            });
        }
        function mostrarPaginaMensajes() {
            const container = document.getElementById('messagesListContainer');

            // Calcular índices de corte para la página actual
            const inicio = (paginaActualMensajes - 1) * mensajesPorPagina;
            const fin = inicio + mensajesPorPagina;
            const mensajesPagina = mensajesCargados.slice(inicio, fin);

            let html = "";
            mensajesPagina.forEach(msg => {
                let safeName = msg.nombre.replace(/</g, "&lt;").replace(/>/g, "&gt;");
                let safeText = msg.mensaje.replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/\n/g, "<br>");

                html += `
                    <div class="message-item-box" style="margin-bottom: 8px;">
                        <div class="message-item-header">
                            <span class="message-item-author">👤 ${safeName}</span>
                            <span class="message-item-date">${msg.fecha}</span>
                        </div>
                        <div class="message-item-text">${safeText}</div>
                    </div>`;
            });

            // Calcular total de páginas necesarias
            const totalPaginas = Math.ceil(mensajesCargados.length / mensajesPorPagina);

            // SOLO agregamos la botonera de paginación si hay más de 1 página (es decir, más de 5 mensajes)
            if (totalPaginas > 1) {
                html += `<div class="pagination-container" style="display: flex; justify-content: center; align-items: center; gap: 6px; margin-top: 15px; flex-wrap: wrap;">`;

                // Botón Anterior
                const deshabilitadoAnt = paginaActualMensajes === 1 ? 'disabled style="opacity: 0.4; cursor: not-allowed;"' : '';
                html += `<button class="quiz-tab-btn" ${deshabilitadoAnt} onclick="cambiarPaginaMensaje(${paginaActualMensajes - 1})" style="padding: 4px 10px; font-size: 0.85rem; border-radius: 4px; min-width: auto;">◀</button>`;

                // Páginas Enumeradas
                for (let i = 1; i <= totalPaginas; i++) {
                    const claseActiva = i === paginaActualMensajes ? 'active' : '';
                    html += `<button class="quiz-tab-btn ${claseActiva}" onclick="cambiarPaginaMensaje(${i})" style="padding: 4px 10px; font-size: 0.85rem; border-radius: 4px; min-width: 32px;">${i}</button>`;
                }

                // Botón Siguiente
                const deshabilitadoSig = paginaActualMensajes === totalPaginas ? 'disabled style="opacity: 0.4; cursor: not-allowed;"' : '';
                html += `<button class="quiz-tab-btn" ${deshabilitadoSig} onclick="cambiarPaginaMensaje(${paginaActualMensajes + 1})" style="padding: 4px 10px; font-size: 0.85rem; border-radius: 4px; min-width: auto;">▶</button>`;

                html += `</div>`;
            }

            container.innerHTML = html;

            // Re-calculamos la altura del acordeón para que se ajuste perfectamente al cambiar de página
            const content = document.getElementById('messagesContent');
            if (content && content.style.maxHeight && content.style.maxHeight !== "0px") {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        }

        function cambiarPaginaMensaje(nuevaPagina) {
            const totalPaginas = Math.ceil(mensajesCargados.length / mensajesPorPagina);
            if (nuevaPagina < 1 || nuevaPagina > totalPaginas) return;

            paginaActualMensajes = nuevaPagina;
            mostrarPaginaMensajes();

            // Opcional: Hace un pequeño scroll suave hacia arriba dentro del contenedor si tuviera scroll
            document.getElementById('messagesListContainer').scrollTop = 0;
        }
    </script>
</body>
</html>
