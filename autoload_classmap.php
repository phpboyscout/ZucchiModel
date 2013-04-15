<?php
// Generated by ZF2's ./bin/classmap_generator.php
return array(
    'ZucchiModel\Adapter\AbstractAdapter'               => __DIR__ . '/src/ZucchiModel/Adapter/AbstractAdapter.php',
    'ZucchiModel\Adapter\AdapterInterface'              => __DIR__ . '/src/ZucchiModel/Adapter/AdapterInterface.php',
    'ZucchiModel\Adapter\Mongo'                         => __DIR__ . '/src/ZucchiModel/Adapter/Mongo.php',
    'ZucchiModel\Adapter\ZendDb'                        => __DIR__ . '/src/ZucchiModel/Adapter/ZendDb.php',
    'ZucchiModel\Annotation\Field'                      => __DIR__ . '/src/ZucchiModel/Annotation/Field.php',
    'ZucchiModel\Annotation\MetadataListener'           => __DIR__ . '/src/ZucchiModel/Annotation/MetadataListener.php',
    'ZucchiModel\Annotation\Relationship'               => __DIR__ . '/src/ZucchiModel/Annotation/Relationship.php',
    'ZucchiModel\Annotation\Target'                     => __DIR__ . '/src/ZucchiModel/Annotation/Target.php',
    'ZucchiModel\Behaviour\AuditTrait'                  => __DIR__ . '/src/ZucchiModel/Behaviour/AuditTrait.php',
    'ZucchiModel\Behaviour\BehaviourListener'           => __DIR__ . '/src/ZucchiModel/Behaviour/BehaviourListener.php',
    'ZucchiModel\Behaviour\ChangeTrackingTrait'         => __DIR__ . '/src/ZucchiModel/Behaviour/ChangeTrackingTrait.php',
    'ZucchiModel\Behaviour\IdentityTrait'               => __DIR__ . '/src/ZucchiModel/Behaviour/IdentityTrait.php',
    'ZucchiModel\Behaviour\SoftDeleteTrait'             => __DIR__ . '/src/ZucchiModel/Behaviour/SoftDeleteTrait.php',
    'ZucchiModel\Behaviour\TimestampTrait'              => __DIR__ . '/src/ZucchiModel/Behaviour/TimestampTrait.php',
    'ZucchiModel\Behaviour\VersionTrait'                => __DIR__ . '/src/ZucchiModel/Behaviour/VersionTrait.php',
    'ZucchiModel\Hydrator\HydrationListener'            => __DIR__ . '/src/ZucchiModel/Hydrator/HydrationListener.php',
    'ZucchiModel\Hydrator\ObjectProperty'               => __DIR__ . '/src/ZucchiModel/Hydrator/ObjectProperty.php',
    'ZucchiModel\Metadata\Adapter\AbstractAdapter'      => __DIR__ . '/src/ZucchiModel/MetaData/Adapter/AbstractAdapter.php',
    'ZucchiModel\Metadata\Adapter\AdapterInterface'     => __DIR__ . '/src/ZucchiModel/MetaData/Adapter/AdapterInterface.php',
    'ZucchiModel\Metadata\Adapter\ZendDb'               => __DIR__ . '/src/ZucchiModel/MetaData/Adapter/ZendDb.php',
    'ZucchiModel\Metadata\Fields'                       => __DIR__ . '/src/ZucchiModel/MetaData/Fields.php',
    'ZucchiModel\Metadata\MetaDataContainer'            => __DIR__ . '/src/ZucchiModel/MetaData/MetaDataContainer.php',
    'ZucchiModel\Metadata\Model'                        => __DIR__ . '/src/ZucchiModel/MetaData/Model.php',
    'ZucchiModel\Metadata\Relationships'                => __DIR__ . '/src/ZucchiModel/MetaData/Relationships.php',
    'ZucchiModel\ModelManager'                          => __DIR__ . '/src/ZucchiModel/ModelManager.php',
    'ZucchiModel\Persistence\Chain'                     => __DIR__ . '/src/ZucchiModel/Persistence/Chain.php',
    'ZucchiModel\Persistence\Container'                 => __DIR__ . '/src/ZucchiModel/Persistence/Container.php',
    'ZucchiModel\Persistence\PersistenceListener'       => __DIR__ . '/src/ZucchiModel/Persistence/PersistenceListener.php',
    'ZucchiModel\Query\Criteria'                        => __DIR__ . '/src/ZucchiModel/Query/Criteria.php',
    'ZucchiModel\ResultSet\HydratingResultSet'          => __DIR__ . '/src/ZucchiModel/ResultSet/HydratingResultSet.php',
    'ZucchiModel\ResultSet\PaginatedResultSet'          => __DIR__ . '/src/ZucchiModel/ResultSet/PaginatedResultSet.php',
    'ZucchiModel\ResultSet\ResultSetInterface'          => __DIR__ . '/src/ZucchiModel/ResultSet/ResultSetInterface.php',
    'ZucchiModelTest\Adapter\MongoTest'                 => __DIR__ . '/tests/unit/ZucchiModelTest/Adapter/MongoTest.php',
    'ZucchiModelTest\Adapter\TestAsset\Customer'        => __DIR__ . '/tests/unit/ZucchiModelTest/Adapter/TestAsset/Customer.php',
    'ZucchiModelTest\Adapter\TestAsset\EliteCustomer'   => __DIR__ . '/tests/unit/ZucchiModelTest/Adapter/TestAsset/EliteCustomer.php',
    'ZucchiModelTest\Adapter\TestAsset\PremierCustomer' => __DIR__ . '/tests/unit/ZucchiModelTest/Adapter/TestAsset/PremierCustomer.php',
    'ZucchiModelTest\Adapter\TestAsset\Role'            => __DIR__ . '/tests/unit/ZucchiModelTest/Adapter/TestAsset/Role.php',
    'ZucchiModelTest\Adapter\TestAsset\User'            => __DIR__ . '/tests/unit/ZucchiModelTest/Adapter/TestAsset/User.php',
    'ZucchiModelTest\Adapter\ZendDbTest'                => __DIR__ . '/tests/unit/ZucchiModelTest/Adapter/ZendDbTest.php',
    'ZucchiModelTest\Annotation\FieldTest'              => __DIR__ . '/tests/unit/ZucchiModelTest/Annotation/FieldTest.php',
    'ZucchiModelTest\Annotation\MetadataListenerTest'   => __DIR__ . '/tests/unit/ZucchiModelTest/Annotation/MetadataListenerTest.php',
    'ZucchiModelTest\Annotation\RelationshipTest'       => __DIR__ . '/tests/unit/ZucchiModelTest/Annotation/RelationshipTest.php',
    'ZucchiModelTest\Annotation\TargetTest'             => __DIR__ . '/tests/unit/ZucchiModelTest/Annotation/TargetTest.php',
    'ZucchiModelTest\Annotation\TestAsset\Customer'     => __DIR__ . '/tests/unit/ZucchiModelTest/Annotation/TestAsset/Customer.php',
    'ZucchiModelTest\Annotation\TestAsset\User'         => __DIR__ . '/tests/unit/ZucchiModelTest/Annotation/TestAsset/User.php',
    'ZucchiModelTest\Behaviour\AuditTraitTest'          => __DIR__ . '/tests/unit/ZucchiModelTest/Behaviour/AuditTraitTest.php',
    'ZucchiModelTest\Behaviour\BehaviourListenerTest'   => __DIR__ . '/tests/unit/ZucchiModelTest/Behaviour/BehaviourListenerTest.php',
    'ZucchiModelTest\Behaviour\ChangeTrackingTraitTest' => __DIR__ . '/tests/unit/ZucchiModelTest/Behaviour/ChangeTrackingTraitTest.php',
    'ZucchiModelTest\Behaviour\IdentityTraitTest'       => __DIR__ . '/tests/unit/ZucchiModelTest/Behaviour/IdentityTraitTest.php',
    'ZucchiModelTest\Behaviour\SoftDeleteTraitTest'     => __DIR__ . '/tests/unit/ZucchiModelTest/Behaviour/SoftDeleteTraitTest.php',
    'ZucchiModelTest\Behaviour\TimestampTraitTest'      => __DIR__ . '/tests/unit/ZucchiModelTest/Behaviour/TimestampTraitTest.php',
    'ZucchiModelTest\Behaviour\VersionTraitTest'        => __DIR__ . '/tests/unit/ZucchiModelTest/Behaviour/VersionTraitTest.php',
    'ZucchiModelTest\Hydrator\HydrationListenerTest'    => __DIR__ . '/tests/unit/ZucchiModelTest/Hydrator/HydrationListenerTest.php',
    'ZucchiModelTest\Hydrator\ObjectPropertyTest'       => __DIR__ . '/tests/unit/ZucchiModelTest/Hydrator/ObjectPropertyTest.php',
    'ZucchiModelTest\MetaDataFieldsTest'                => __DIR__ . '/tests/unit/ZucchiModelTest/MetaData/FieldsTest.php',
    'ZucchiModelTest\MetaDataModelTest'                 => __DIR__ . '/tests/unit/ZucchiModelTest/MetaData/ModelTest.php',
    'ZucchiModelTest\MetaDataRelationshipsTest'         => __DIR__ . '/tests/unit/ZucchiModelTest/MetaData/RelationshipsTest.php',
    'ZucchiModelTest\ModelManagerTest'                  => __DIR__ . '/tests/unit/ZucchiModelTest/ModelManagerTest.php',
    'ZucchiModelTest\Query\CriteriaTest'                => __DIR__ . '/tests/unit/ZucchiModelTest/Query/CriteriaTest.php',
    'ZucchiModelTest\ResultSet\HydratingResultSetTest'  => __DIR__ . '/tests/unit/ZucchiModelTest/ResultSet/HydratingResultSetTest.php',
    'ZucchiModelTest\ResultSet\PaginatedResultSetTest'  => __DIR__ . '/tests/unit/ZucchiModelTest/ResultSet/PaginatedResultSetTest.php',
);