package com.mycompany.mywebap;

import com.google.gwt.core.client.EntryPoint;
import com.google.gwt.core.client.GWT;
import com.google.gwt.event.dom.client.ClickEvent;
import com.google.gwt.event.dom.client.ClickHandler;
import com.google.gwt.event.dom.client.KeyCodes;
import com.google.gwt.event.dom.client.KeyUpEvent;
import com.google.gwt.event.dom.client.KeyUpHandler;
import com.google.gwt.safehtml.shared.SafeHtmlBuilder;
import com.google.gwt.user.client.rpc.AsyncCallback;
import com.google.gwt.user.client.ui.Button;
import com.google.gwt.user.client.ui.DialogBox;
import com.google.gwt.user.client.ui.HTML;
import com.google.gwt.user.client.ui.Label;
import com.google.gwt.user.client.ui.RootPanel;
import com.google.gwt.user.client.ui.TextBox;
import com.google.gwt.user.client.ui.VerticalPanel;

/**
 * Entry point classes define <code>onModuleLoad()</code>.
 */
public class App implements EntryPoint {
	/**
	 * The message displayed to the user when the server cannot be reached or
	 * returns an error.
	 */
	private static final String SERVER_ERROR = "An error occurred while "
			+ "attempting to contact the server. Please check your network "
			+ "connection and try again.";

	/**
	 * Create a remote service proxy to talk to the server-side Greeting service.
	 */
	private final GreetingServiceAsync greetingService = GWT
			.create(GreetingService.class);

	/**
	 * This is the entry point method.
	 */


	public void onModuleLoad() {
		final Button sendButton = new Button("Send to Server");
		final TextBox phone = new TextBox();
		phone.setText("Номер телефону");
		final TextBox name = new TextBox();
		name.setText("Ім/'я");
		final TextBox email = new TextBox();
		email.setText("Електронна пошта");
			final TextBox message = new TextBox();
		message.setText("Коментар");

		final Label errorLabel = new Label();
		

		// We can add style names to widgets
		sendButton.addStyleName("sendButton");
		 {
    // Create a Label and an HTML widget.
    Label lbl = new Label("This is just text.  It will not be interpreted "
      + "as <html>.");
HTML html = new HTML("<nav class='sticky top-0 h-20 bg-[#243c5a] p-5 sm:px-24 xl:px-64'><div class='mx-auto flex justify-between items-center'><a href='#' class='uppercase text-white text-xl xl:text-3xl font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter'>Start Tailwind</a><button class='block md:hidden uppercase inline-flex items-center bg-green-500 px-3 py-2 rounded-lg text-white'>Menu <svg class='h-4 fill-current' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z'/></svg></button><div class='hidden md:block'><a href='' class='px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500'>Portfolio</a><a href='' class='px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500'>About</a><a href='' class='px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500'>Contact</a></div></div></nav>", true);
   /* HTML html = new HTML("<section class='bg-green-500 py-32 '><figure class='container px-16 pt-12 mx-auto'><img class='mb-12 h-64 mx-auto' src='https://francescomansi.me/img/start-tailwind/avataaars.svg' alt=''></figure><h1 class='text-center uppercase text-white text-5xl lg:text-6xl font-bold  leading-none tracking-normal'>Start Tailwind</h1><div class='flex flex-row items-center justify-center py-4'><span class='h-1 w-24 bg-white rounded-full mx-2'></span><svg class='h-12 fill-current text-white ' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z'/></svg><span class='h-1 w-24 bg-white rounded-full mx-2'></span></div><p class='px-12 text-center text-white text-xl font-normal font-sans'>Graphic Artist - Web Designer -Illustrator</p></section>"
        + "<nav class='sticky top-0 h-20 bg-[#243c5a] p-5 sm:px-24 xl:px-64'><div class='mx-auto flex justify-between items-center'><a href='#' class='uppercase text-white text-xl xl:text-3xl font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter'>Start Tailwind</a><button class='block md:hidden uppercase inline-flex items-center bg-green-500 px-3 py-2 rounded-lg text-white'>Menu <svg class='h-4 fill-current' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z'/></svg></button><div class='hidden md:block'><a href='' class='px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500'>Portfolio</a><a href='' class='px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500'>About</a><a href='' class='px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500'>Contact</a></div></div></nav>", true);
*/
    // Add them to the root panel.
    VerticalPanel panel = new VerticalPanel();
    panel.add(lbl);
    panel.add(html);
    RootPanel.get("header").add(html);
	RootPanel.get("body").addStyleName("m-0");
	
  }
  
sendButton.addStyleName("sendButton bg-green-500 px-2 py-2 rounded-lg text-white ml-4");
		// Add the nameField and sendButton to the RootPanel
		// Use RootPanel.get() to get the entire body element
		RootPanel.get("nameFieldContainerphone").add(phone);
		RootPanel.get("nameFieldContainername").add(name);
		RootPanel.get("nameFieldContaineremail").add(email);
		RootPanel.get("nameFieldContainermessage").add(message);
		RootPanel.get("sendButtonContainer").add(sendButton);
		RootPanel.get("errorLabelContainer").add(errorLabel);
		

		// Focus the cursor on the name field when the app loads
		phone.setFocus(true);
		phone.selectAll();
			name.setFocus(true);
		name.selectAll();
			email.setFocus(true);
		email.selectAll();
			message.setFocus(true);
		message.selectAll();

		// Create the popup dialog box
		final DialogBox dialogBox = new DialogBox();

dialogBox.addStyleName("bg-blue-50 px-2 py-2 rounded-lg text-green");
phone.addStyleName("bg-blue-100 px-2 py-2 rounded-lg text-green");
name.addStyleName("bg-blue-100 px-2 py-2 rounded-lg text-green");
email.addStyleName("bg-blue-100 px-2 py-2 rounded-lg text-green");
message.addStyleName("bg-blue-100 px-2 py-2 rounded-lg text-green  ");


		dialogBox.setText("Дані отримані з форми");
		dialogBox.setAnimationEnabled(true);
		final Button closeButton = new Button("Покинути це вікно");
		// We can set the id of a widget by accessing its Element
		closeButton.getElement().setId("closeButton");

		closeButton.addStyleName("bg-red-200 px-2 py-2 rounded-lg text-white");
		
		final Label textToServerphoneLabel = new Label();
		final HTML serverResponseLabel = new HTML();
		VerticalPanel dialogVPanel = new VerticalPanel();



		
		dialogVPanel.addStyleName("dialogVPanel");
		dialogVPanel.add(new HTML("<b>ПРИВІТ</b>"));
		dialogVPanel.add(new HTML("<b>Привіт користувач:</b>"));
		dialogVPanel.add(textToServerphoneLabel);
		dialogVPanel.add(new HTML("<br><b>ВИ ВВЕЛИ:</b>"));
		dialogVPanel.add(serverResponseLabel);
		dialogVPanel.setHorizontalAlignment(VerticalPanel.ALIGN_RIGHT);
		dialogVPanel.add(closeButton);
		dialogBox.setWidget(dialogVPanel);

		// Add a handler to close the DialogBox
		closeButton.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				dialogBox.hide();
				sendButton.setEnabled(true);
				sendButton.setFocus(true);
			}
		});

		// Create a handler for the sendButton and nameField
		class MyHandler implements ClickHandler, KeyUpHandler {
			/**
			 * Fired when the user clicks on the sendButton.
			 */
			public void onClick(ClickEvent event) {
				sendNameToServer();
			}

			/**
			 * Fired when the user types in the nameField.
			 */
			public void onKeyUp(KeyUpEvent event) {
				if (event.getNativeKeyCode() == KeyCodes.KEY_ENTER) {
					sendNameToServer();
				}
			}

			/**
			 * Send the name from the nameField to the server and wait for a response.
			 */
			private void sendNameToServer() {
				// First, we validate the input.
				errorLabel.setText("");
				String textToServerphone = phone.getText();
				if (!FieldVerifier.isValidName(textToServerphone)) {
					errorLabel.setText("Пліз введіть телефон");
					return;
				}
				String textToServername = name.getText();
				if (!FieldVerifier.isValidName(textToServername)) {
					errorLabel.setText("Пліз введіть ваше імя");
					return;
				}
				String textToServeremail = email.getText();
				if (!FieldVerifier.isValidName(textToServeremail)) {
					errorLabel.setText("Пліз ви не ввели пошту");
					return;
				}
				String textToServermessage = message.getText();
				if (!FieldVerifier.isValidName(textToServermessage)) {
					errorLabel.setText("Пліз ви не ввели повідомлення");
					return;
				}

				// Then, we send the input to the server.
				sendButton.setEnabled(false);
				textToServerphoneLabel.setText(textToServername);
				
				
				
				serverResponseLabel.setText("");
				greetingService.greetServer(textToServername,
						new AsyncCallback<GreetingResponse>() {
							public void onFailure(Throwable caught) {
								// Show the RPC error message to the user
								dialogBox
										.setText("Дані що були отримані з форми");
								serverResponseLabel
										.addStyleName("serverResponseLabelError");
								serverResponseLabel.setHTML(SERVER_ERROR);
								dialogBox.center();
								closeButton.setFocus(true);
							}

							public void onSuccess(GreetingResponse result) {
								dialogBox.setText("Дані з форми");
								serverResponseLabel
										.removeStyleName("serverResponseLabelError");
								serverResponseLabel.setHTML(new SafeHtmlBuilder()
										.appendEscaped(result.getGreeting())
											.appendHtmlConstant("<br><br>Ваш телефон: ")
										.appendHtmlConstant(textToServerphone)
										.appendHtmlConstant("<br>Ваше імя: ")
										.appendHtmlConstant(textToServername)
										.appendHtmlConstant("<br>Ваша пошта: ")
										.appendHtmlConstant(textToServeremail)
										.appendHtmlConstant("<br>Ваше повідомлення: ")
										.appendHtmlConstant(textToServermessage)
										
										.appendHtmlConstant(".<br>ПОВІДОМЛЕННЯ БУДЕ НАДІСЛАНО НАЙБЛИЖЧИМ ЧАСОМ<br>")
										
										.toSafeHtml());
								dialogBox.center();
								closeButton.setFocus(true);
							}
						});
			}
			
		}

		// Add a handler to send the name to the server
		MyHandler handler = new MyHandler();
		sendButton.addClickHandler(handler);
		phone.addKeyUpHandler(handler);
		
	}
}
