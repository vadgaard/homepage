default: ../frontend/frontend_dark.css ../frontend/frontend_light.css

../frontend/frontend_dark.css : frontend.less
	lessc\
		--global-var="bg-color = #282C34"   \
		--global-var="text-color = #ABB3BF" \
		--global-var="link-color = #F4A8EE" \
		frontend.less ../frontend/frontend_dark.css

../frontend/frontend_light.css : frontend.less
	lessc\
		--global-var="bg-color = #FFFFFF"   \
		--global-var="text-color = #000000" \
		--global-var="link-color = #5BC0DE" \
		frontend.less ../frontend/frontend_light.css

.PHONY: ../frontend/frontend_dark.css ../frontend/frontend_light.css
