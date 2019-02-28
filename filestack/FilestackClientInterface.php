<?php

namespace Filestack;

Interface FilestackClientInterface {

    public function getCdnUrl( $handle );
    public function getContent( $url );
    public function getMetaData( $url, $fields = [] );
    public function getSafeForWork( $handle );
    public function getTags( $handle );
    public function collage( $sources,
                             $width,
                             $height,
                             $store_options = [],
                             $color         = 'white',
                             $fit           = 'auto',
                             $margin        = 10,
                             $auto_rotate   = false
                            );
    public function convertAudio( $resource,
                                  $format,
                                  $options = [],
                                  $force   = false
                                 );
    public function convertFile( $resource,
                                 $filetype,
                                 $options = []
                                );
    public function convertVideo( $resource,
                                  $format,
                                  $options = [],
                                  $force   = false
                                 );
    public function debug( $resource, $transform_tasks );
    public function delete( $handle );
    public function download( $url, $destination );
    public function overwrite( $filepath, $handle );
    public function screenshot( $url,
                                $store_options = [],
                                $agent         = 'desktop',
                                $mode          = 'all',
                                $width         = 1024,
                                $height        = 768,
                                $delay         = 0
                               );
    public function transform( $url, $transform_tasks );
    public function upload( $filepath, $options = [] );
    public function uploadUrl( $resource, $options = [] );
    public function zip( $sources, $store_options = [] );

} // End of Interface FilestackClientInterface
