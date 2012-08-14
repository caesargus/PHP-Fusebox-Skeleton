<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE fusebox>
<!--
	Example fusebox.xml control file. Shows how to define circuits, classes,
	parameters and global fuseactions.
-->
<fusebox>
	<circuits>
		<circuit alias="m" path="model/" parent="" />
		<circuit alias="v" path="views/" parent="" />
		<circuit alias="app" path="controller/" parent="" />
	</circuits>

	<classes>
	</classes>

	<parameters>
		<parameter name="defaultFuseaction" value="app.welcome" />
		<!-- you may want to change this to development-full-load mode: -->
		<parameter name="mode" value="production" />
		<!-- change this to something more secure: -->
		<parameter name="password" value="skeleton" />
		<!--
			These are all default values that can be overridden:
		<parameter name="fuseactionVariable" value="fuseaction" />
		<parameter name="precedenceFormOrUrl" value="form" />
		<parameter name="scriptFileDelimiter" value="php" />
		<parameter name="maskedFileDelimiters" value="htm,cfm,cfml,php,php4,asp,aspx" />
		<parameter name="characterEncoding" value="utf-8" />
		<paramater name="strictMode" value="false" />
		<parameter name="allowImplicitCircuits" value="false" />
		-->
		<parameter name="debug" value="true"/>
	</parameters>

	<globalfuseactions>
		<appinit>
			<fuseaction action="m.initialize"/>
		</appinit>
		<!--
		<preprocess>
			<fuseaction action="m.preprocess"/>
		</preprocess>
		<postprocess>
			<fuseaction action="m.postprocess"/>
		</postprocess>
		-->
	</globalfuseactions>

	<plugins>
		<phase name="preProcess">
			<!--
			<plugin name="prePP" template="preProcess">
				<parameter name="abc" value="123" />
			</plugin>
			-->
		</phase>
		<phase name="preFuseaction">
		</phase>
		<phase name="postFuseaction">
		</phase>
		<phase name="fuseactionException">
		</phase>
		<phase name="postProcess">
		</phase>
		<phase name="processError">
		</phase>
	</plugins>

</fusebox>
