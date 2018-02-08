
plugin.tx_simplepodcast_podcast {
  view {
    templateRootPaths.0 = EXT:simple_podcast/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_simplepodcast_podcast.view.templateRootPath}
    partialRootPaths.0 = EXT:simple_podcast/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_simplepodcast_podcast.view.partialRootPath}
    layoutRootPaths.0 = EXT:simple_podcast/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_simplepodcast_podcast.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_simplepodcast_podcast.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

simplepodcast-feed = PAGE
simplepodcast-feed {
  typeNum = 1518104755
  config {
    disableAllHeaderCode = 1
    xhtml_cleaning = none
    admPanel = 0
    debug = 0
    additionalHeaders.10.header = Content-Type:text/xml;charset=utf-8
    disablePrefixComment = 1
    disableCharsetHeader = 1
  }
  10 = USER
  10 {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    extensionName = SimplePodcast
    pluginName = Podcast
    vendorName = PB
    switchableControllerActions {
      PodcastChannel {
        1 = feed
      }
    }
  }
}
