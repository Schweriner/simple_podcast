
plugin.tx_simplepodcast_podcast {
  view {
    # cat=plugin.tx_simplepodcast_podcast/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:simple_podcast/Resources/Private/Templates/
    # cat=plugin.tx_simplepodcast_podcast/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:simple_podcast/Resources/Private/Partials/
    # cat=plugin.tx_simplepodcast_podcast/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:simple_podcast/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_simplepodcast_podcast//a; type=string; label=Default storage PID
    storagePid =
  }
}
