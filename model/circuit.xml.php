<circuit access="internal">
	
	<!--
		Example model fuseaction that just references an action fuse.
		Model fuseactions should only reference actions and queries.
	-->
	<fuseaction name="getTime">
		<include template="act_get_time" />
	</fuseaction>
	
	<!--
		This is executed at application startup (from <appinit>) and
		therefore is thread safe (and does not need a lock):
	-->
	<fuseaction name="initialize">
		<set value="\$myApp =&amp; \$myFusebox-&gt;getApplication();" evaluate="true"/>
		<set name="myApp-&gt;data['startTime']" value="return microtime();" evaluate="true" />
		<set name="myApp-&gt;data['startTime']" value="return (substr(\$myApp-&gt;data['startTime'],-strpos(\$myApp-&gt;data['startTime'],' ')))*1000;" evaluate="true"/>
	</fuseaction>
	
</circuit>
