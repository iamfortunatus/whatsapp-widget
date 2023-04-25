<style>
    /* WhatsApp Chat Widget */

.whatsapp-widget {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #00661f;
  color: #fff;
  border-radius: 50px;
  padding: 10px 15px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.whatsapp-widget:hover {
  background-color: #06912f;
}

.whatsapp-widget img {
  height: 25px;
  margin-right: 5px;
}

.whatsapp-widget a{
  color: #fff;
}

/* WhatsApp Popup Widget */

.whatsapp-popup {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 9999;
  width: 300px;
  max-width: 100%;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  display: none;
}

.whatsapp-popup.show {
  display: block;
}

.whatsapp-popup-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  border-bottom: 1px solid #ddd;
}

.whatsapp-popup-title {
  font-size: 18px;
  font-weight: bold;
  color: #00661f;
}

.whatsapp-popup-close-btn {
  font-size: 25px;
  font-weight: bold;
  color: #00661f;
  border: none;
  background-color: transparent;
  cursor: pointer;
}

.whatsapp-popup-close-btn:hover {
  color: #000000;
}

.whatsapp-popup-body {
  padding: 20px;
  text-align: center;
}

.whatsapp-popup-body p {
  margin-bottom: 20px;
}

.whatsapp-popup-body a {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #00661f;
  color: #fff;
  border-radius: 50px;
  padding: 10px 15px;
  text-decoration: none;
  transition: all 0.3s ease-in-out;
}

.whatsapp-popup-body a:hover {
  background-color: #00661f;
  color: #fff;
}

.whatsapp-popup-body a img {
  height: 25px;
  margin-right: 5px;
}
</style> 
 <!-- WhatsApp Chat Widget -->
 <div class="whatsapp-widget">
	<a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer">
		<img src="images/whatsapp.png" alt="WhatsApp Logo" />
		<span>Chat with us on WhatsApp</span>
	</a>
</div>

<!-- WhatsApp Popup Widget -->
<div class="whatsapp-popup">
	<div class="whatsapp-popup-content">
		<div class="whatsapp-popup-header">
			<span class="whatsapp-popup-title">Chat with us on WhatsApp</span>
			<button class="whatsapp-popup-close-btn">&times;</button>
		</div>
		<div class="whatsapp-popup-body">
			<p>Click the button below to chat with us on WhatsApp:</p>
			<a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer">
				<img src="images/whatsapp.png" alt="WhatsApp Logo" />
				<span>Chat with us</span>
			</a>
		</div>
	</div>
</div>

<script>
    $(document).ready(function () {
	// Show WhatsApp popup widget when clicking on WhatsApp chat widget
	$('.whatsapp-widget a').click(function (e) {
		e.preventDefault();
		$('.whatsapp-popup').fadeIn();
	});

	// Hide WhatsApp popup widget when clicking on close button
	$('.whatsapp-popup-close-btn').click(function () {
		$('.whatsapp-popup').fadeOut();
	});

	// Hide WhatsApp popup widget when clicking outside of the widget
	$(document).mouseup(function (e) {
		var container = $(".whatsapp-popup");
		if (!container.is(e.target) && container.has(e.target).length === 0) {
			container.fadeOut();
		}
	});
});
</script>