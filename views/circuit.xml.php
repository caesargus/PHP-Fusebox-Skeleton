<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE circuit>
<!--
	Example circuit.xml file for the views portion of an application.
-->
<circuit access="internal">
	
	<!--
		Apply a standard layout to the result of all display fuseactions.
		This is fine for simple applications that have just one layout but
		for more complicated situations you will either need to move to
		multiple view circuits or a view circuit and a layout circuit and
		may have to explicitly call a layout fuseaction from your other
		display fuseactions.
	-->
	<postfuseaction>
		<include template="lay_template" />
	</postfuseaction>
	
	<!--
		Example display fuseaction. The output of the template is placed
		in a content variable which is used in the layout template.
	-->
	<fuseaction name="sayHello">
		<include template="dsp_hello" contentvariable="body" />
	</fuseaction>
	
</circuit>
