#!/bin/bash
until docker run -u zap -p 8090:8090 --rm --name zaproxy -i \
            --add-host "host.docker.internal:host-gateway" \
            -v "./policies/STD.policy:/home/zap/.ZAP/policies/STD.policy" \
            ghcr.io/zaproxy/zaproxy:bare zap.sh \
            -daemon -port 8090 -host 0.0.0.0 \
            -config api.addrs.addr.name='.*' -config api.addrs.addr.regex=true -config api.key=popsp3nasdfesc7h4agk4m24cj \
            -config start.checkForUpdates=true -config start.checkAddonUpdates=true -config start.installAddonUpdates=true \
            -config start.installScannerRules=true -config start.reportReleaseAddons=true -config start.reportBetaAddons=true -config start.reportAlphaAddons=true \
            -config spider.maxDepth=2 -config spider.maxChildren=10 -config spider.thread=4 -config spider.handleParameters=IGNORE_VALUE -config spider.excludedFromScan="\\.jpg|\\.png" \
            -config scanner.threadPerHost=4 -config scanner.defaultPolicy=STD -config scanner.maxScanDurationInMins=60 -config scanner.maxRuleDurationInMins=3 \
            -addoninstall ascanrulesBeta -addoninstall pscanrulesBeta \
            -addoninstall ascanrulesAlpha -addoninstall pscanrulesAlpha -addoninstall sqliplugin  \
            -addonuninstall hud -addonuninstall fuzz -addonuninstall soap -addonuninstall spiderAjax -addonuninstall openapi -addonuninstall websocket \
            -addonuninstall bruteforce -addonuninstall invoke -addonuninstall formhandler -addonuninstall plugnhack \
            -addonuninstall sequence -addonuninstall accessControl -addonuninstall zest \
            -addonuninstall webdriverwindows -addonuninstall webdrivermacos -addonuninstall selenium \
            -addonuninstall jxbrowserlinux64 -addonuninstall jxbrowserwindows64 -addonuninstall jxbrowserwindows -addonuninstall jxbrowsermacos -addonuninstall jxbrowser \
            -addonuninstall gettingStarted -addonuninstall help -addonuninstall quickstart -addonuninstall onlineMenu -addonuninstall tips
do
    echo "$0 crashed with exit code $?.  Respawning.." >&2
    sleep 1
done
