/**
 * toaster.js - Enhanced Toast Notification System
 * 
 * Version: 1.1.0
 * Last Updated: 2025-03-23
 * 
 * Description:
 * This module creates a modern, 3D-looking toast notification system that displays messages at the bottom center of the page.
 * Toasts appear with a smooth fade-in and slide-up animation, enhanced with a slight bounce effect for a 3D feel.
 * Each toast plays a short audio cue based on its status (using the Web Audio API) and displays a corresponding Google Material icon.
 * Toast notifications automatically dismiss after 5 seconds, with an option to click and dismiss immediately.
 * 
 * Features:
 * - Dynamically creates a toast container and displays notifications.
 * - Supports three types of notifications: 'success', 'error', and 'info'.
 * - Uses gradient backgrounds for a modern look:
 *    - Success: Green gradient
 *    - Error: Red gradient
 *    - Info: Blue gradient
 * - Integrates Google Material Icons at the start of each toast.
 * - Uses the "Poppins" font for a fresh, modern look.
 * - Plays a sound for each status:
 *    - Success: High-pitched tone (600 Hz)
 *    - Error: Low-pitched tone (300 Hz)
 *    - Info: Medium-pitched tone (450 Hz)
 * - Toasts fade in, slide upward, and auto-dismiss after 5 seconds, with smooth transitions.
 * 
 * Usage:
 * Include this script in your HTML file and call the global function showToast(message, status)
 * to display a notification. For example:
 * 
 *     showToast("Registration successful.", "success");
 *     showToast("An error occurred. Please try again.", "error");
 *     showToast("Please check your input.", "info");
 * 
 * The 'status' parameter accepts the values: 'success', 'error', or 'info'.
 */

(function(){
    const toastContainer = document.createElement('div');
    toastContainer.id = 'toastContainer';
    toastContainer.style.position = 'fixed';
    toastContainer.style.bottom = '20px';
    toastContainer.style.left = '50%';
    toastContainer.style.transform = 'translateX(-50%)';
    toastContainer.style.zIndex = '9999';
    document.body.appendChild(toastContainer);

    window.showToast = function(message, status) {
        const toast = document.createElement('div');
        toast.style.minWidth = '320px';
        toast.style.marginBottom = '10px';
        toast.style.padding = '15px 20px';
        toast.style.borderRadius = '5px';
        toast.style.color = '#fff';
        toast.style.fontSize = '1rem';
        toast.style.fontFamily = "'Poppins', sans-serif";
        toast.style.boxShadow = '0 6px 18px rgba(0,0,0,0.4)';
        toast.style.opacity = '0';
        toast.style.transform = 'translateY(30px)';
        toast.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        toast.style.cursor = 'pointer';
        toast.style.display = 'flex';
        toast.style.alignItems = 'center';

        const icon = document.createElement('i');
        icon.classList.add('material-icons');
        icon.style.marginRight = '10px';
        switch(status) {
            case 'success':
                icon.textContent = 'check_circle';
                toast.style.background = 'linear-gradient(45deg, #43a047, #66bb6a)';
                playSound('success');
                break;
            case 'error':
                icon.textContent = 'error';
                toast.style.background = 'linear-gradient(45deg, #e53935, #ef5350)';
                playSound('error');
                break;
            case 'info':
            default:
                icon.textContent = 'info';
                toast.style.background = 'linear-gradient(45deg, #1e88e5, #42a5f5)';
                playSound('info');
                break;
        }
        toast.appendChild(icon);

        const msgSpan = document.createElement('span');
        msgSpan.textContent = message;
        toast.appendChild(msgSpan);

        toastContainer.appendChild(toast);

        setTimeout(() => {
            toast.style.opacity = '1';
            toast.style.transform = 'translateY(0)';
        }, 100);

        const removeToast = () => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(20px)';
            setTimeout(() => {
                if (toastContainer.contains(toast)) {
                    toastContainer.removeChild(toast);
                }
            }, 500);
        };

        toast.addEventListener('click', removeToast);
        setTimeout(removeToast, 5000);
    };

    function playSound(status) {
        const context = new (window.AudioContext || window.webkitAudioContext)();
        const oscillator = context.createOscillator();
        const gainNode = context.createGain();
        oscillator.connect(gainNode);
        gainNode.connect(context.destination);
        switch(status) {
            case 'success':
                oscillator.frequency.value = 600;
                break;
            case 'error':
                oscillator.frequency.value = 300;
                break;
            case 'info':
            default:
                oscillator.frequency.value = 450;
                break;
        }
        oscillator.type = 'sine';
        gainNode.gain.setValueAtTime(0.1, context.currentTime);
        oscillator.start();
        oscillator.stop(context.currentTime + 0.2);
    }
})();
